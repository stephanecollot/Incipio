<?php
        
/*
This file is part of Incipio.

Incipio is an enterprise resource planning for Junior Enterprise
Copyright (C) 2012-2014 Florian Lefevre.

Incipio is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as
published by the Free Software Foundation, either version 3 of the
License, or (at your option) any later version.

Incipio is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with Incipio as the file LICENSE.  If not, see <http://www.gnu.org/licenses/>.
*/


namespace mgate\SuiviBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormBuilder;
use mgate\PersonneBundle\Form;

class ProcesVerbalSubType extends DocTypeType {

    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options) {
        $phaseNum = $options['phases'];
        if ($options['type'] == "pvi") {
            $builder->add('phaseID', 'integer', array('label' => 'Phases concernées', 'required' => false, 'attr' => array('min' => '1', 'max' => $phaseNum)));
        }

        DocTypeType::buildForm($builder, $options);
    }

    public function getName() {
        return 'mgate_suivibundle_procesverbalsubtype';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'mgate\SuiviBundle\Entity\ProcesVerbal',
            'type' => null,
            'prospect' => null,
            'phases' => null,
        ));
    }

}

