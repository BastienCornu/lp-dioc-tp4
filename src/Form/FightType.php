<?php

namespace App\Form;

use App\Entity\Player;
use App\Fight\Fight;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FightType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // FIXME: Ajouter les champs firstname, lastname, email, birthday

        $builder
            ->add('player',
                EntityType::class,
                [
                    'class' => Player::class,
                    'choice_label' => function (Player $player) {
                        return $player->getName() . ' - ' . $player->getCurrentWeapon()->getName();
                    },
                    'multiple' => false,
                    'expanded' => false,
                ])
            ->add(
                'distance',
                IntegerType::class
            )
            ->add('target',
                EntityType::class,
                [
                    'class' => Player::class,
                    'choice_label' => function (Player $player) {
                        return $player->getName() . ' - ' . $player->getCurrentWeapon()->getName();
                    },
                    'multiple' => false,
                    'expanded' => false,
                ])
            ->add(
                'save',
                SubmitType::class,
                array('label' => 'Créer')
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        // FIXME: ajouter la configuration du for
        $resolver->setDefaults(array("data_class" => Fight::class));

    }
}
