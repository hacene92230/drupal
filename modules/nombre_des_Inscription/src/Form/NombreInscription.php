<?php

namespace Drupal\nombre_des_inscription\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * {@inheritdoc}
 */
class NombreInscription extends FormBase {

  /**
   * @return string
   *   The unique ID of this form defined by this class
   */
  public function getFormId() {
    return 'nombre_des_inscription';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormstateInterface $form_state) {

    $form['description'] = [
      '#type' => 'item',
      '#markup' => $this->t('Inscription'),
    ];

     $form['indentifiant'] = [
      '#type' => 'hidden',
      '#title' => $this->t('Identifiant'),
      '#description' => $this->t('Identifiant'),
      '#required' => FALSE,
    ];

    $form['firstname'] = [
      '#type' => 'textfield',
      '#maxlength' => 20,
      '#title' => $this->t('Firstname'),
      '#description' => $this->t('Enter your firstname.'),
      '#required' => TRUE,
      
    ];

    $form['lastname'] = [
      '#type' => 'textfield',
      '#maxlength' => 20,
      '#title' => $this->t('Lastname'),
      '#description' => $this->t('Enter your lastname.'),
      '#required' => TRUE,
    ];

    $form['birth_date'] = [
      '#type' => 'date',
      '#title' => $this->t('Birth Date'),
      '#description' => $this->t('Enter your birth date.'),
      '#required' => TRUE,
    ];

    $form['city'] = [
      '#type' => 'textfield',
      '#maxlength' => 20,
      '#title' => $this->t('City'),
      '#description' => $this->t('Enter your town.'),
      '#required' => TRUE,
    ];
   
    $form['cp'] = [
      '#type' => 'number',
      '#title' => $this->t('cp'),
      '#description' => $this->t('Enter your CP.'),
      '#required' => TRUE,
    ];

    $form['country'] = [
      '#type' => 'textfield',
      '#maxlength' => 20,
      '#title' => $this->t('Country'),
      '#description' => $this->t('Enter your country.'),
      '#required' => TRUE,
    ];

   

    $form['adress'] = [
      '#type' => 'textfield',
      '#title' => $this->t('adress'),
      '#description' => $this->t('Enter your adress.'),
      '#required' => TRUE,
    ];

    $form['phone'] = [
      '#type' => 'tel',
      '#title' => $this->t('Phone'),
      '#description' => $this->t('Enter your phone number.'),
      '#required' => TRUE,
    ];

    $form['internet'] = [
      '#type' => 'url',
      '#title' => $this->t('Internet'),
      '#description' => $this->t('Enter your web sites adress.'),
      '#required' => TRUE,
    ];

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
      '#button_type' => 'primary',
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {

    // Check if string input contains any invalid characters.
    $firstname = $form_state->getValue('firstname');
    $lastname = $form_state->getValue('lastname');
    $city = $form_state->getValue('city');
    $country = $form_state->getValue('country');
    $phone = $form_state->getValue('phone');
    $internet = $form_state->getValue('internet');
    if (!preg_match("/^[a-zA-Z ]*$/", $firstname)) {
      $form_state->setErrorByName('firstname', $this->t('Your firstname should contain only letters.'));
    }

    if (!preg_match("/^[a-zA-Z ]*$/", $lastname)) {
      $form_state->setErrorByName('lastname', $this->t('Your lastname should contain only letters.'));
    }

    if (!preg_match("/^[a-zA-Z ]*$/", $city)) {
      $form_state->setErrorByName('city', $this->t('Your city should contain only letters.'));
    }
    
    if (!preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $internet)) {
      $form_state->setErrorByName('internet', $this->t('Your internet adress is not valid.'));
    }

    if (!preg_match("/^[a-zA-Z ]*$/", $country)) {
      $form_state->setErrorByName('country', $this->t('Your country should contain only letters.'));
    }

    if (!preg_match("/^[0-9 ]*$/", $phone)) {
      $form_state->setErrorByName('phone', $this->t('Your phone number should contain only numbers.'));
    }

    // Validate numbers.
    $cp = $form_state->getValue('cp');
    if (strlen($cp) < 4 || strlen($cp) > 7) {
      $form_state->setErrorByName('cp', $this->t('You CP is invalid.'));
    }

    // Check if age and birth date correspond.
    $birth_year = ($form_state->getValue('birth_date'));
    $current_year = date("Y");
    if (($current_year - $birth_year) < 16) {
      $form_state->setErrorByName('birth_date', $this->t('Your are too young.'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Capitalise the first letter of the strings.
    $form_state->setValue('firstname', ucfirst($form_state->getValue('firstname')));
    $form_state->setValue('lastname', ucfirst($form_state->getValue('lastname')));
    $form_state->setValue('city', ucfirst($form_state->getValue('city')));
    $form_state->setValue('country', ucfirst($form_state->getValue('country')));

    // Output all the values entered by user.
    drupal_set_message($this->t('Your datas are: "@firstname", "@lastname", @birth_date, "@adress", "@city", "@cp","@country", "@phone", "@email"', [
      '@firstname' => $form_state->getValue('firstname'),
      '@lastname' => $form_state->getValue('lastname'),
      '@birth_date' => $form_state->getValue('birth_date'),
      '@city' => $form_state->getValue('city'),
      '@cp' => $form_state->getValue('cp'),
      '@adress' => $form_state->getValue('adress'),
      '@email' => $form_state->getValue('email'),
      '@internet' => $form_state->getValue('internet'),
      '@phone' => $form_state->getValue('phone'),
      '@country' => $form_state->getValue('country'),
    ]));
  }

}
