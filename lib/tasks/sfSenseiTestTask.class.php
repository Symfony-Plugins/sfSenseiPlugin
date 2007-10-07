<?php

class sfSenseiTestTeast extends sfSenseiBaseTask
{

  protected function configure()
  {
    $this->alias = array('sensei-test');
    $this->namespace = 'sensei';
    $this->name = 'test';
    $this->briefDescription = 'This is just a tset';

    $this->detailedDescription = <<<EOF
    
The [sensei:test|INFO] task is a test, and does nothing:

  [./symfony sensei:test|INFO]
EOF;
  }

  protected function execute($arguments = array(), $options = array())
  {
    
  }
}
