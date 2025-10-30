{**
* templates/frontend/pages/userRegister.tpl
*
* Copyright (c) 2014-2023 Simon Fraser University
* Copyright (c) 2003-2023 John Willinsky
* Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
*
* User registration form.
*}
{include file="frontend/components/header.tpl" pageTitle="user.register"}

{assign var="siteContextId" value=PKP\core\PKPApplication::SITE_CONTEXT_ID|intval}

<div id="main-content" class="page page_register">

	{include file="frontend/components/breadcrumbs.tpl" currentTitleKey="user.register"}

	<form class="pkp_form register" id="register" method="post" action="{url op="register"}">
		{csrf}

		{if $source}
			<input type="hidden" name="source" value="{$source|escape}" />
		{/if}

		{include file="common/formErrors.tpl"}

		{include file="frontend/components/registrationForm.tpl"}

		{* When a user is registering with a specific journal *}
		{if $currentContext}

			<fieldset class="consent">
				{if $currentContext->getSetting('privacyStatement')}
				{* Require the user to agree to the terms of the privacy policy *}
					<div class="form-group optin optin-privacy">
						<label>
							<input type="checkbox" name="privacyConsent" value="1"{if $privacyConsent} checked="checked"{/if}>
							{capture assign="privacyUrl"}{url router=\PKP\core\PKPApplication::ROUTE_PAGE page="about" op="privacy"}{/capture}
							{translate key="user.register.form.privacyConsent" privacyUrl=$privacyUrl}
						</label>
					</div>
				{/if}
				{* Ask the user to opt into public email notifications *}
				<div class="form-group optin optin-email">
					<label>
						<input type="checkbox" name="emailConsent" value="1"{if $emailConsent} checked="checked"{/if}>
						{translate key="user.register.form.emailConsent"}
					</label>
				</div>
			</fieldset>

			{* Allow the user to sign up as a reviewer *}
			{assign var=contextId value=$currentContext->getId()}
			{assign var=userCanRegisterReviewer value=0}
			{foreach from=$reviewerUserGroups[$contextId] item=userGroup}
				{if $userGroup->permitSelfRegistration}
					{assign var=userCanRegisterReviewer value=$userCanRegisterReviewer+1}
				{/if}
			{/foreach}
			{if $userCanRegisterReviewer}
				<fieldset class="reviewer">
					{if $userCanRegisterReviewer > 1}
						<legend>
							{translate key="user.reviewerPrompt"}
						</legend>
						{capture assign="checkboxLocaleKey"}user.reviewerPrompt.userGroup{/capture}
					{else}
						{capture assign="checkboxLocaleKey"}user.reviewerPrompt.optin{/capture}
					{/if}
					<div class="fields">
						<div id="reviewerOptinGroup" class="form-group optin">
							{foreach from=$reviewerUserGroups[$contextId] item=userGroup}
								{if $userGroup->permitSelfRegistration}
									<label>
										{assign var="userGroupId" value=$userGroup->id}
										<input type="checkbox" name="reviewerGroup[{$userGroupId}]" value="1"{if in_array($userGroupId, $userGroupIds)} checked="checked"{/if}>
										{translate key=$checkboxLocaleKey userGroup=$userGroup->getLocalizedData('name')|escape}
									</label>
								{/if}
							{/foreach}
						</div>
						<div id="reviewerInterests" class="form-group reviewer_interests">
							<label>
								{translate key="user.interests"}
								<input class="form-control" type="text" name="interests" id="interests" value="{$interests|default:""|escape}">
							</label>
						</div>
					</div>
				</fieldset>
			{/if}
		{/if}

		{include file="frontend/components/registrationFormContexts.tpl"}

		{if !$currentContext}
			{* Require the user to agree to the terms of the privacy policy *}
			<fieldset class="consent">
				{if $siteWidePrivacyStatement}
					<div class="form-group optin optin-privacy">
						<label>
							<input type="checkbox" name="privacyConsent[{$siteContextId}]" id="privacyConsent[{$siteContextId}]" value="1"{if $privacyConsent[$siteContextId]} checked="checked"{/if}>
							{capture assign="privacyUrl"}{url router=\PKP\core\PKPApplication::ROUTE_PAGE page="about" op="privacy"}{/capture}
							{translate key="user.register.form.privacyConsent" privacyUrl=$privacyUrl}
						</label>
					</div>
				{/if}

				{* Ask the user to opt into public email notifications *}
				<div class="form-group optin optin-email">
					<label>
						<input type="checkbox" name="emailConsent" value="1"{if $emailConsent} checked="checked"{/if}>
						{translate key="user.register.form.emailConsent"}
					</label>
				</div>

				{* When a user is registering for no specific journal, allow them to enter their reviewer interests *}
				<div class="form-group reviewer_nocontext_interests">
					<label>
						{translate key="user.register.noContextReviewerInterests"}
						<input class="form-control" type="text" name="interests" id="interests" value="{$interests|default:""|escape}">
					</label>
				</div>
			</fieldset>
		{/if}

		{* recaptcha spam blocker *}
		{if $recaptchaPublicKey}
			<fieldset class="recaptcha_wrapper">
				<div class="fields">
					<div class="recaptcha">
						<div class="g-recaptcha" data-sitekey="{$recaptchaPublicKey|escape}">
						</div>
					</div>
				</div>
			</fieldset>
		{/if}

		{* altcha spam blocker *}
		{if $altchaEnabled}
			<fieldset class="altcha_wrapper">
				<div class="fields">
					<altcha-widget challengejson='{$altchaChallenge|@json_encode}' floating></altcha-widget>
				</div>
			</fieldset>
		{/if}

		<div class="buttons">
			<button class="btn btn-primary submit" type="submit">
				{translate key="user.register"}
			</button>

			{capture assign="rolesProfileUrl"}{url page="user" op="profile" path="roles"}{/capture}
			<a class="btn btn-default" href="{url page="login" source=$rolesProfileUrl}" class="login">
				{translate key="user.login"}
			</a>
		</div>
	</form>


{include file="common/frontend/footer.tpl"}
