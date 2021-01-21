<?php

namespace App\Controller\Admin;

use App\Entity\Test;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\CountryField;

class TestCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Test::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            CountryField::new('country')
                ->setCustomOption(CountryField::OPTION_COUNTRY_CODE_FORMAT, CountryField::FORMAT_ISO_3166_ALPHA3),
        ];
    }
}
