#set( $ClassName = "" )
#set( $part = "" )
#foreach($part in $pkgHandle.split("_"))
  #set( $ClassName = "${ClassName}$part.substring(0,1).toUpperCase()$part.substring(1).toLowerCase()" )
#end

<?php
#parse("PHP File Header.php")

namespace Concrete\Package\\${ClassName};

use Concrete\Core\Backup\ContentImporter;
use Concrete\Core\Package\Package;

class Controller extends Package
{
    /**
     * @var string package handle
     */
protected ${DS}pkgHandle = '${pkgHandle}';

    /**
     * @var string required concrete5 version
     */
#if (${appVersionRequired} != '')
    protected ${DS}appVersionRequired = '${appVersionRequired}';
#else 
    protected ${DS}appVersionRequired = '9.0.0';
#end     

    /**
     * @var string package version
     */
#if (${pkgVersion} != '')
    protected ${DS}pkgVersion = '${ClassName}';
#else 
    protected ${DS}pkgVersion = '0.0.1';
#end        

    /**
     * @var array Autoload custom classes
     */
    protected ${DS}pkgAutoloaderRegistries = [
        'src/Concrete' => '\\${ClassName}',
    ];

    /**
     * @return string Package name
     */
    public function getPackageName(): string
    {
    #if (${pkgName} != '')
        return t('${pkgName}');
    #else 
        return t('${ClassName}');
    #end            
    }

    /**
     * @return string Package description
     */
    public function getPackageDescription(): string
    {
    #if (${pkgDescription} != '')
        return t('${pkgDescription}');
    #else 
        return t('${ClassName}');
    #end        
    }

    /**
     * Package installation process.
     */
    public function install(): void
    {
        parent::install();
        ${DS}this->installXml();
    }

    /**
     * Package upgrade process.
     */
    public function upgrade(): void
    {
        parent::upgrade();
        ${DS}this->installXml();
    }

    private function installXml(): void
    {
        ${DS}ci = new ContentImporter();
        ${DS}ci->importContentFile(${DS}this->getPackagePath() . '/config/install.xml');
    }
}
