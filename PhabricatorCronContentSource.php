<?php

final class PhabricatorCronContentSource
  extends PhabricatorContentSource {

  const SOURCECONST = 'cron';

  public function getSourceName() {
    return pht('Cron Job');
  }

  public function getSourceDescription() {
    return pht('Updates from cron jobs.');
  }

}
