<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2019
 *
 * Generated from xml/schema/CRM/Batch/EntityBatch.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:ad54978e70be59ea54b414bbb3131f2f)
 */

/**
 * Database access object for the EntityBatch entity.
 */
class CRM_Batch_DAO_EntityBatch extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_entity_batch';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * primary key
   *
   * @var int unsigned
   */
  public $id;

  /**
   * physical tablename for entity being joined to file, e.g. civicrm_contact
   *
   * @var string
   */
  public $entity_table;

  /**
   * FK to entity table specified in entity_table column.
   *
   * @var int unsigned
   */
  public $entity_id;

  /**
   * FK to civicrm_batch
   *
   * @var int unsigned
   */
  public $batch_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_entity_batch';
    parent::__construct();
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'batch_id', 'civicrm_batch', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Dynamic(self::getTableName(), 'entity_id', NULL, 'id', 'entity_table');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('EntityBatch ID'),
          'description' => ts('primary key'),
          'required' => TRUE,
          'table_name' => 'civicrm_entity_batch',
          'entity' => 'EntityBatch',
          'bao' => 'CRM_Batch_BAO_EntityBatch',
          'localizable' => 0,
        ],
        'entity_table' => [
          'name' => 'entity_table',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('EntityBatch Table'),
          'description' => ts('physical tablename for entity being joined to file, e.g. civicrm_contact'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_entity_batch',
          'entity' => 'EntityBatch',
          'bao' => 'CRM_Batch_BAO_EntityBatch',
          'localizable' => 0,
        ],
        'entity_id' => [
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Entity ID'),
          'description' => ts('FK to entity table specified in entity_table column.'),
          'required' => TRUE,
          'table_name' => 'civicrm_entity_batch',
          'entity' => 'EntityBatch',
          'bao' => 'CRM_Batch_BAO_EntityBatch',
          'localizable' => 0,
        ],
        'batch_id' => [
          'name' => 'batch_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Batch ID'),
          'description' => ts('FK to civicrm_batch'),
          'required' => TRUE,
          'table_name' => 'civicrm_entity_batch',
          'entity' => 'EntityBatch',
          'bao' => 'CRM_Batch_BAO_EntityBatch',
          'localizable' => 0,
          'FKClassName' => 'CRM_Batch_DAO_Batch',
          'pseudoconstant' => [
            'table' => 'civicrm_batch',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          ]
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'entity_batch', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'entity_batch', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'index_entity' => [
        'name' => 'index_entity',
        'field' => [
          0 => 'entity_table',
          1 => 'entity_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_entity_batch::0::entity_table::entity_id',
      ],
      'UI_batch_entity' => [
        'name' => 'UI_batch_entity',
        'field' => [
          0 => 'batch_id',
          1 => 'entity_id',
          2 => 'entity_table',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_entity_batch::1::batch_id::entity_id::entity_table',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
