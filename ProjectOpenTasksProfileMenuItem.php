<?php

final class ProjectOpenTasksProfileMenuItem
  extends PhabricatorProfileMenuItem {

  const MENUITEMKEY = 'custom.open-tasks';

  public function getMenuItemTypeIcon() {
    return 'fa-anchor';
  }

  public function getMenuItemTypeName() {
    return pht('Link to Open Tasks');
  }

  public function canAddToObject($object) {
    return ($object instanceof PhabricatorProject);
  }

  public function getDisplayName(
    PhabricatorProfileMenuItemConfiguration $config) {
    return pht('Open Tasks');
  }

  protected function newMenuItemViewList(
    PhabricatorProfileMenuItemConfiguration $config) {
    $viewer = $this->getViewer();

    $name = $this->getDisplayName($config);
    $icon = 'fa-anchor';

    $object = $config->getProfileObject();
    $uri = '/maniphest/?project='.$object->getPHID().'#R';

    $item = $this->newItemView()
      ->setURI($uri)
      ->setName($name)
      ->setIcon($icon);

    return array(
      $item,
    );
  }

}
