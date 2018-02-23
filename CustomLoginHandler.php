<?php

final class CustomLoginHandler
  extends PhabricatorAuthLoginHandler {

  public function getAuthLoginHeaderContent() {
    return phutil_safe_html(
      '  <div class="aphront-dialog-view">
    <div class="aphront-dialog-head">
      <div class="phui-header-shell">
        <h1 class="phui-header-view">
          <span class="phui-header-header">Wie logge ich mich ein?<span>
        </h1>
      </div>
    </div>

    <div class="aphront-dialog-body">
      <p>Wenn Sie der <strong>Universität Heidelberg</strong> zugehörig sind und über eine <strong>UniID</strong> verfügen, klicken Sie bitte auf den Butten weiter unten, welcher folgenermaßen aussieht:</p>

      <div class="phabricator-login-button mmb">
        <button class="button button-grey big has-icon has-text phui-button-default">
          <span class="visual-only phui-icon-view sprite-login login-UHD" aria-hidden="true"></span>
          <div class="phui-button-text">
            Login or Register

            <div class="phui-button-subtext">
              Uni Heidelberg - UniID
            </div>
          </div>
        </button>
      </div>

      <p>Wenn Sie ein <strong>externer Nutzer</strong> sind, geben Sie bitte ihren Nutzernamen und ihr Passwort direkt unter "External User" ein.</p>
    </div>
  </div>');
  }

}
