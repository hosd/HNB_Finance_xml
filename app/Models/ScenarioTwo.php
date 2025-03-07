<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScenarioTwo extends Model
{
    use HasFactory;

    protected $table = 'scenario_2_trans_details';
    public $timestamps = true;

    protected $fillable = [
        'id',
        'scenario_type',
        'rentity_id',
        'rentity_branch',
        'submission_code',
        'report_code',
        'entity_reference',
        'submission_date',
        'currency_code_local',
        'reason',
        'transactionnumber',
        'internal_ref_number',
        'transaction_location',
        'transaction_description',
        'date_transaction',
        'value_date',
        'transmode_code',
        'amount_local',
        'from_funds_code',
        'from_account_institution_name',
        'from_account_swift',
        'from_account_non_bank_institution',
        'from_account_branch',
        'from_account_number',
        'from_account_currency_code',
        'from_account_personal_account_type',
        'from_entity_name',
        'from_entity_incorporation_legal_form',
        'from_entity_incorporation_number',
        'from_entity_business',
        'from_entity_address_type',
        'from_entity_address',
        'from_entity_address_city',
        'from_entity_address_country_code',
        'from_entity_incorporation_country_code',
        'from_account_status_code',
        'from_country',
        'to_funds_code',
        'to_entity_name',
        'to_entity_incorporation_legal_form',
        'to_entity_incorporation_number',
        'to_entity_business',
        'to_entity_address_type',
        'to_entity_address',
        'to_entity_address_city',
        'to_entity_address_country_code',
        'to_entity_incorporation_country_code',
        'to_country',
        'report_indicator',
        'to_person_gender',
        'to_person_title',
        'to_person_first_name',
        'to_person_last_name',
        'to_person_birthdate',
        'to_person_ssn',
        'to_person_nationality1',
        'to_person_residence',
        'to_person_address_type',
        'to_person_address',
        'to_person_city',
        'to_person_country_code',
        'to_person_occupation',
        'status',
        'is_delete',
        'xml_gen_status',
        'created_at',
        'updated_at'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}


