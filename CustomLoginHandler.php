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
        <div class="button grey big has-icon ">
          <span class="visual-only phui-icon-view sprite-login login-UHD" aria-hidden="true"></span>
          <div class="phui-button-text">
            Login or Register

            <div class="phui-button-subtext">
              Uni Heidelberg - UniID
            </div>
          </div>
        </div>
      </div>

      <p>Wenn Sie ein <strong>externer Nutzer</strong> sind, geben Sie bitte unten ihren Nutzernamen und ihr Passwort ein.</p>
    </div>
  </div>

  <div class="aphront-dialog-view">
    <div class="aphront-dialog-head">
      <div class="phui-action-header sprite-gradient gradient-lightblue-header">
        <h2 class="phui-action-header-title">Fragen oder Probleme?</h2>
      </div>
    </div>

    <div class="aphront-dialog-body">
     <p>Bei Problem und Fragen wenden Sie sich bitte an den <a href="http://it-service.uni-heidelberg.de/">IT-Support</a> oder schreiben eine Email an die <a href="mailto:urz-phabricator@listserv.uni-heidelberg.de">Phabricator Admins</a>.</p>
    </div>
  </div>');
  }

}
