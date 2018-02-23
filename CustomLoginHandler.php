<?php

final class CustomLoginHandler
  extends PhabricatorAuthLoginHandler {

  public function getAuthLoginHeaderContent() {
    return phutil_safe_html(
      '  <div class="aphront-dialog-view">
    <div class="aphront-dialog-head">
      <div class="phui-action-header sprite-gradient gradient-lightblue-header">
        <h2 class="phui-action-header-title">Wie logge ich mich ein?</h2>
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

      <p>Wenn Sie ein <strong>externer Nutzer</strong> sind, geben Sie bitte unten ihren Nutzernamen und ihr Passwort ein.</p>
    </div>
  </div>');
  }

}
