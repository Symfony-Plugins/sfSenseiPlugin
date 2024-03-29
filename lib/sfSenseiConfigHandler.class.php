<?php

class sfSenseiConfigHandler extends sfYamlConfigHandler
{
  public function execute($configFiles)
  {
    // Parse yaml config files
    $configs = $this->parseYamls($configFiles);

    $data = sprintf ("  'sensei_classes' => %s,\n", var_export($configs['all']['classes'], true));
    
    $retval = "<?php\n" .
    "// auto-generated by sfSenseiConfigHandler\n" .
    "// date: %s\nsfConfig::add(array(\n%s));\n";
    $retval = sprintf($retval, date('Y-m-d H:i:s'), $data);

    return $retval;
  }

}
