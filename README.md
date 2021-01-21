# Steps to reproduce

- Create your own _DATABASE_URL_ global variable. I use MySQL.
- Run `php bin/console doctrine:database:create`
- Run `php bin/console doctrine:migrations:migrate`
    - In case of having trouble with the error "The metadata storage is not up to date, please run the sync-metadata-storage command to fix this issue.", cut the next code from _vendor\doctrine\migrations\lib\Doctrine\Migrations\Metadata\Storage\TableMetadataStorage.php_ temporarily and paste it back after running the command.
        ```
        $expectedTable = $this->getExpectedTable();
        
        if ($this->needsUpdate($expectedTable) !== null) {
        	throw MetadataStorageError::notUpToDate();
        }
        ```
- Run `php bin/console serve` and open the page. You will see the flags with the UNKNOWN value in HTML.