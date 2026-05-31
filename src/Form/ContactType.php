<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Count;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                "label" => "氏名",
                "constraints" => [
                    new NotBlank([
                        "message" => "未入力です"
                    ])
                ]
            ])
            ->add('gender', ChoiceType::class, [
                "label" => "性別",
                "choices" => [
                    "男性" => "男性",
                    "女性" => "女性",
                    "不定" => "不定"
                ],
                "expanded" => true,
                "constraints" => [
                    new NotBlank([
                        "message" => "選択されていません"
                    ])
                ]
            ])
            ->add('reason', ChoiceType::class, [
                "label" => "理由",
                "choices" => [
                    "理由1" => "理由1",
                    "理由2" => "理由2",
                    "理由3" => "理由3"
                ],
                "expanded" => true,
                "multiple" => true,
                "constraints" => [
                    new Count([
                        "min" => 1,
                        "minMessage" => "選択されていません"
                    ])
                ]
            ])
            ->add('postal1', TextType::class, [
                "label" => "郵便番号",
                "required" => false
            ])
            ->add('postal2', TextType::class, [
                "label" => "郵便番号",
                "required" => false
            ])
            ->add('pref', ChoiceType::class, [
                "label" => "都道府県",
                "choices" => [
                    "愛知県" => "愛知県",
                    "岐阜県" => "岐阜県",
                    "三重県" => "三重県",
                    "静岡県" => "静岡県"
                ],
                "constraints" => [
                    new NotBlank([
                        "message" => "選択されていません"
                    ])
                ]
            ])
            ->add('email', EmailType::class, [
                "label" => "メールアドレス",
                "constraints" => [
                    new NotBlank([
                        "message" => "未入力です"
                    ])
                ]
            ])
            ->add('message', TextareaType::class, [
                "label" => "本文",
                "required" => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
