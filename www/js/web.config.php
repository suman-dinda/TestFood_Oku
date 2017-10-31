<?xml version="1.0" encoding="UTF-8"?>
<configuration>
    <system.webServer>
        <rewrite>
 <rules>
     <rule name="Main Rule" stopProcessing="true">
         <match url=".*" />
         <conditions logicalGrouping="MatchAll">
             <add input="{REQUEST_FILENAME}" matchType="IsFile" negate="true" />
             <add input="{REQUEST_FILENAME}" matchType="IsDirectory" negate="true" />
         </conditions>
         <action type="Rewrite" url="index.php/{R:0}" />
     </rule>
 </rules>
</rewrite>
    </system.webServer>
</configuration>