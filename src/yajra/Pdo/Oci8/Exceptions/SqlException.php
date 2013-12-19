<?php
namespace yajra\Pdo\Oci8\Exceptions;

use Illuminate\Database;

class SqlException extends \PDOException
{
  /**
	 * The variable for error information.
	 *
	 * @var errorInfo
	 */
	public $errorInfo;
}
