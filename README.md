# Doctrine Annotation bug

Execute the following commands to reproduce the issue.

Install PHP7.2, and make it available on the path. Enable the sqlite extension.

Navigate to `my-lib`, and install dependencies:
```bash
cd ./my-lib
composer install
```

Navigate to `my-project`, and install dependencies:
```bash
cd ../my-project
composer install
```

Try to build the database with doctrine ( it will call `doctrine orm:schema-tool:update` ):

```bash
composer update-db
```

This error will appear:

```
In AnnotationException.php line 54:

  [Semantical Error] The annotation "@MyLib\Annotation\Example" in property App\Entity\User::$id does not exist,
   or could not be auto-loaded.
```
