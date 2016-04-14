
Command = CreateEnvironment / UsingEnvironment

CreateEnvironment = _ "create" _ "environment" _ name:Name _ ";"
  {
    return [
      'command' => 'CreateEnvironment',
      'name' => $name
    ];
  }


UsingEnvironment = _ "using" _ "environment" _ name:Name _ ";"
  {
    return [
      'command' => 'UsingEnvironment',
      'name' => $name
    ];
  }

Name = "'" name:[A-Za-z0-9_-]* "'"
  {
    return join("", $name);
  }

_ = [ \t\n\r]*