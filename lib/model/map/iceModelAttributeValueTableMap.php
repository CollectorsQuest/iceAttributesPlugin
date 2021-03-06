<?php



/**
 * This class defines the structure of the 'attribute_value' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.plugins.iceAttributesPlugin.lib.model.map
 */
class iceModelAttributeValueTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'plugins.iceAttributesPlugin.lib.model.map.iceModelAttributeValueTableMap';

  /**
   * Initialize the table attributes, columns and validators
   * Relations are not initialized by this method since they are lazy loaded
   *
   * @return     void
   * @throws     PropelException
   */
  public function initialize()
  {
    // attributes
    $this->setName('attribute_value');
    $this->setPhpName('iceModelAttributeValue');
    $this->setClassname('iceModelAttributeValue');
    $this->setPackage('plugins.iceAttributesPlugin.lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('STRING', 'String', 'VARCHAR', false, 255, null);
    $this->addColumn('NUMERIC', 'Numeric', 'DOUBLE', false, null, null);
    $this->addColumn('BOOLEAN', 'Boolean', 'BOOLEAN', false, 1, null);
    $this->addColumn('DATE', 'Date', 'DATE', false, null, null);
    $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
    $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
  }

  /**
   *
   * Gets the list of behaviors registered for this table
   *
   * @return array Associative array (name => parameters) of behaviors
   */
  public function getBehaviors()
  {
    return array(
      'timestampable' => array('create_column' => 'created_at', 'update_column' => 'updated_at', ),
      'symfony' => array('form' => 'true', 'filter' => 'true', ),
      'symfony_behaviors' => array(),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
