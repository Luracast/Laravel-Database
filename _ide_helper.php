<?php
/**
 * An helper file for Laravel 4 Database, to provide autocomplete information to your IDE
 * Generated with https://github.com/barryvdh/laravel-ide-helper
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */

namespace {
	exit('Only to be used as an helper for your IDE');

	class DB extends \Illuminate\Support\Facades\DB{
		/**
		 * Create a new database manager instance.
		 *
		 * @param \Illuminate\Foundation\Application  $app
		 * @param \Illuminate\Database\Connectors\ConnectionFactory  $factory
		 * @return void
		 * @static 
		 */
		 public static function __construct($app, $factory){
			//Method inherited from \Illuminate\Database\DatabaseManager
			 \Illuminate\Database\DatabaseManager::__construct($app, $factory);
		 }

		/**
		 * Get a database connection instance.
		 *
		 * @param string  $name
		 * @return \Illuminate\Database\Connection
		 * @static 
		 */
		 public static function connection($name = null){
			//Method inherited from \Illuminate\Database\DatabaseManager
			return \Illuminate\Database\DatabaseManager::connection($name);
		 }

		/**
		 * Reconnect to the given database.
		 *
		 * @param string  $name
		 * @return \Illuminate\Database\Connection
		 * @static 
		 */
		 public static function reconnect($name = null){
			//Method inherited from \Illuminate\Database\DatabaseManager
			return \Illuminate\Database\DatabaseManager::reconnect($name);
		 }

		/**
		 * Disconnect from the given database.
		 *
		 * @param string  $name
		 * @return void
		 * @static 
		 */
		 public static function disconnect($name = null){
			//Method inherited from \Illuminate\Database\DatabaseManager
			 \Illuminate\Database\DatabaseManager::disconnect($name);
		 }

		/**
		 * Get the default connection name.
		 *
		 * @return string
		 * @static 
		 */
		 public static function getDefaultConnection(){
			//Method inherited from \Illuminate\Database\DatabaseManager
			return \Illuminate\Database\DatabaseManager::getDefaultConnection();
		 }

		/**
		 * Set the default connection name.
		 *
		 * @param string  $name
		 * @return void
		 * @static 
		 */
		 public static function setDefaultConnection($name){
			//Method inherited from \Illuminate\Database\DatabaseManager
			 \Illuminate\Database\DatabaseManager::setDefaultConnection($name);
		 }

		/**
		 * Register an extension connection resolver.
		 *
		 * @param string    $name
		 * @param callable  $resolver
		 * @return void
		 * @static 
		 */
		 public static function extend($name, $resolver){
			//Method inherited from \Illuminate\Database\DatabaseManager
			 \Illuminate\Database\DatabaseManager::extend($name, $resolver);
		 }

		/**
		 * Return all of the created connections.
		 *
		 * @return array
		 * @static 
		 */
		 public static function getConnections(){
			//Method inherited from \Illuminate\Database\DatabaseManager
			return \Illuminate\Database\DatabaseManager::getConnections();
		 }

		/**
		 * Dynamically pass methods to the default connection.
		 *
		 * @param string  $method
		 * @param array   $parameters
		 * @return mixed
		 * @static 
		 */
		 public static function __call($method, $parameters){
			//Method inherited from \Illuminate\Database\DatabaseManager
			return \Illuminate\Database\DatabaseManager::__call($method, $parameters);
		 }

		/**
		 * Set the query grammar to the default implementation.
		 *
		 * @return void
		 * @static 
		 */
		 public static function useDefaultQueryGrammar(){
			//Method inherited from \Illuminate\Database\Connection
			 \Illuminate\Database\SQLiteConnection::useDefaultQueryGrammar();
		 }

		/**
		 * Set the schema grammar to the default implementation.
		 *
		 * @return void
		 * @static 
		 */
		 public static function useDefaultSchemaGrammar(){
			//Method inherited from \Illuminate\Database\Connection
			 \Illuminate\Database\SQLiteConnection::useDefaultSchemaGrammar();
		 }

		/**
		 * Set the query post processor to the default implementation.
		 *
		 * @return void
		 * @static 
		 */
		 public static function useDefaultPostProcessor(){
			//Method inherited from \Illuminate\Database\Connection
			 \Illuminate\Database\SQLiteConnection::useDefaultPostProcessor();
		 }

		/**
		 * Get a schema builder instance for the connection.
		 *
		 * @return \Illuminate\Database\Schema\Builder
		 * @static 
		 */
		 public static function getSchemaBuilder(){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::getSchemaBuilder();
		 }

		/**
		 * Begin a fluent query against a database table.
		 *
		 * @param string  $table
		 * @return \Illuminate\Database\Query\Builder
		 * @static 
		 */
		 public static function table($table){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::table($table);
		 }

		/**
		 * Get a new raw query expression.
		 *
		 * @param mixed  $value
		 * @return \Illuminate\Database\Query\Expression
		 * @static 
		 */
		 public static function raw($value){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::raw($value);
		 }

		/**
		 * Run a select statement and return a single result.
		 *
		 * @param string  $query
		 * @param array   $bindings
		 * @return mixed
		 * @static 
		 */
		 public static function selectOne($query, $bindings = array()){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::selectOne($query, $bindings);
		 }

		/**
		 * Run a select statement against the database.
		 *
		 * @param string  $query
		 * @param array   $bindings
		 * @return array
		 * @static 
		 */
		 public static function select($query, $bindings = array()){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::select($query, $bindings);
		 }

		/**
		 * Run an insert statement against the database.
		 *
		 * @param string  $query
		 * @param array   $bindings
		 * @return bool
		 * @static 
		 */
		 public static function insert($query, $bindings = array()){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::insert($query, $bindings);
		 }

		/**
		 * Run an update statement against the database.
		 *
		 * @param string  $query
		 * @param array   $bindings
		 * @return int
		 * @static 
		 */
		 public static function update($query, $bindings = array()){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::update($query, $bindings);
		 }

		/**
		 * Run a delete statement against the database.
		 *
		 * @param string  $query
		 * @param array   $bindings
		 * @return int
		 * @static 
		 */
		 public static function delete($query, $bindings = array()){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::delete($query, $bindings);
		 }

		/**
		 * Execute an SQL statement and return the boolean result.
		 *
		 * @param string  $query
		 * @param array   $bindings
		 * @return bool
		 * @static 
		 */
		 public static function statement($query, $bindings = array()){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::statement($query, $bindings);
		 }

		/**
		 * Run an SQL statement and get the number of rows affected.
		 *
		 * @param string  $query
		 * @param array   $bindings
		 * @return int
		 * @static 
		 */
		 public static function affectingStatement($query, $bindings = array()){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::affectingStatement($query, $bindings);
		 }

		/**
		 * Run a raw, unprepared query against the PDO connection.
		 *
		 * @param string  $query
		 * @return bool
		 * @static 
		 */
		 public static function unprepared($query){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::unprepared($query);
		 }

		/**
		 * Prepare the query bindings for execution.
		 *
		 * @param array  $bindings
		 * @return array
		 * @static 
		 */
		 public static function prepareBindings($bindings){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::prepareBindings($bindings);
		 }

		/**
		 * Execute a Closure within a transaction.
		 *
		 * @param Closure  $callback
		 * @return mixed
		 * @throws \Exception
		 * @static 
		 */
		 public static function transaction($callback){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::transaction($callback);
		 }

		/**
		 * Start a new database transaction.
		 *
		 * @return void
		 * @static 
		 */
		 public static function beginTransaction(){
			//Method inherited from \Illuminate\Database\Connection
			 \Illuminate\Database\SQLiteConnection::beginTransaction();
		 }

		/**
		 * Commit the active database transaction.
		 *
		 * @return void
		 * @static 
		 */
		 public static function commit(){
			//Method inherited from \Illuminate\Database\Connection
			 \Illuminate\Database\SQLiteConnection::commit();
		 }

		/**
		 * Rollback the active database transaction.
		 *
		 * @return void
		 * @static 
		 */
		 public static function rollBack(){
			//Method inherited from \Illuminate\Database\Connection
			 \Illuminate\Database\SQLiteConnection::rollBack();
		 }

		/**
		 * Execute the given callback in "dry run" mode.
		 *
		 * @param Closure  $callback
		 * @return array
		 * @static 
		 */
		 public static function pretend($callback){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::pretend($callback);
		 }

		/**
		 * Log a query in the connection's query log.
		 *
		 * @param string  $query
		 * @param array   $bindings
		 * @param $time
		 * @return void
		 * @static 
		 */
		 public static function logQuery($query, $bindings, $time = null){
			//Method inherited from \Illuminate\Database\Connection
			 \Illuminate\Database\SQLiteConnection::logQuery($query, $bindings, $time);
		 }

		/**
		 * Register a database query listener with the connection.
		 *
		 * @param Closure  $callback
		 * @return void
		 * @static 
		 */
		 public static function listen($callback){
			//Method inherited from \Illuminate\Database\Connection
			 \Illuminate\Database\SQLiteConnection::listen($callback);
		 }

		/**
		 * Get a Doctrine Schema Column instance.
		 *
		 * @param string  $table
		 * @param string  $column
		 * @return \Doctrine\DBAL\Schema\Column
		 * @static 
		 */
		 public static function getDoctrineColumn($table, $column){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::getDoctrineColumn($table, $column);
		 }

		/**
		 * Get the Doctrine DBAL schema manager for the connection.
		 *
		 * @return \Doctrine\DBAL\Schema\AbstractSchemaManager
		 * @static 
		 */
		 public static function getDoctrineSchemaManager(){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::getDoctrineSchemaManager();
		 }

		/**
		 * Get the Doctrine DBAL database connection instance.
		 *
		 * @return \Doctrine\DBAL\Connection
		 * @static 
		 */
		 public static function getDoctrineConnection(){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::getDoctrineConnection();
		 }

		/**
		 * Get the current PDO connection.
		 *
		 * @return PDO
		 * @static 
		 */
		 public static function getPdo(){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::getPdo();
		 }

		/**
		 * Get the current PDO connection used for reading.
		 *
		 * @return PDO
		 * @static 
		 */
		 public static function getReadPdo(){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::getReadPdo();
		 }

		/**
		 * Set the PDO connection.
		 *
		 * @param PDO  $pdo
		 * @return \Illuminate\Database\Connection
		 * @static 
		 */
		 public static function setPdo($pdo){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::setPdo($pdo);
		 }

		/**
		 * Set the PDO connection used for reading.
		 *
		 * @param PDO  $pdo
		 * @return \Illuminate\Database\Connection
		 * @static 
		 */
		 public static function setReadPdo($pdo){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::setReadPdo($pdo);
		 }

		/**
		 * Get the database connection name.
		 *
		 * @return string|null
		 * @static 
		 */
		 public static function getName(){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::getName();
		 }

		/**
		 * Get an option from the configuration options.
		 *
		 * @param string  $option
		 * @return mixed
		 * @static 
		 */
		 public static function getConfig($option){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::getConfig($option);
		 }

		/**
		 * Get the PDO driver name.
		 *
		 * @return string
		 * @static 
		 */
		 public static function getDriverName(){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::getDriverName();
		 }

		/**
		 * Get the query grammar used by the connection.
		 *
		 * @return \Illuminate\Database\Query\Grammars\Grammar
		 * @static 
		 */
		 public static function getQueryGrammar(){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::getQueryGrammar();
		 }

		/**
		 * Set the query grammar used by the connection.
		 *
		 * @param \Illuminate\Database\Query\Grammars\Grammar
		 * @return void
		 * @static 
		 */
		 public static function setQueryGrammar($grammar){
			//Method inherited from \Illuminate\Database\Connection
			 \Illuminate\Database\SQLiteConnection::setQueryGrammar($grammar);
		 }

		/**
		 * Get the schema grammar used by the connection.
		 *
		 * @return \Illuminate\Database\Query\Grammars\Grammar
		 * @static 
		 */
		 public static function getSchemaGrammar(){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::getSchemaGrammar();
		 }

		/**
		 * Set the schema grammar used by the connection.
		 *
		 * @param \Illuminate\Database\Schema\Grammars\Grammar
		 * @return void
		 * @static 
		 */
		 public static function setSchemaGrammar($grammar){
			//Method inherited from \Illuminate\Database\Connection
			 \Illuminate\Database\SQLiteConnection::setSchemaGrammar($grammar);
		 }

		/**
		 * Get the query post processor used by the connection.
		 *
		 * @return \Illuminate\Database\Query\Processors\Processor
		 * @static 
		 */
		 public static function getPostProcessor(){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::getPostProcessor();
		 }

		/**
		 * Set the query post processor used by the connection.
		 *
		 * @param \Illuminate\Database\Query\Processors\Processor
		 * @return void
		 * @static 
		 */
		 public static function setPostProcessor($processor){
			//Method inherited from \Illuminate\Database\Connection
			 \Illuminate\Database\SQLiteConnection::setPostProcessor($processor);
		 }

		/**
		 * Get the event dispatcher used by the connection.
		 *
		 * @return \Illuminate\Events\Dispatcher
		 * @static 
		 */
		 public static function getEventDispatcher(){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::getEventDispatcher();
		 }

		/**
		 * Set the event dispatcher instance on the connection.
		 *
		 * @param \Illuminate\Events\Dispatcher
		 * @return void
		 * @static 
		 */
		 public static function setEventDispatcher($events){
			//Method inherited from \Illuminate\Database\Connection
			 \Illuminate\Database\SQLiteConnection::setEventDispatcher($events);
		 }

		/**
		 * Get the paginator environment instance.
		 *
		 * @return \Illuminate\Pagination\Factory
		 * @static 
		 */
		 public static function getPaginator(){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::getPaginator();
		 }

		/**
		 * Set the pagination environment instance.
		 *
		 * @param \Illuminate\Pagination\Factory|\Closure  $paginator
		 * @return void
		 * @static 
		 */
		 public static function setPaginator($paginator){
			//Method inherited from \Illuminate\Database\Connection
			 \Illuminate\Database\SQLiteConnection::setPaginator($paginator);
		 }

		/**
		 * Get the cache manager instance.
		 *
		 * @return \Illuminate\Cache\CacheManager
		 * @static 
		 */
		 public static function getCacheManager(){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::getCacheManager();
		 }

		/**
		 * Set the cache manager instance on the connection.
		 *
		 * @param \Illuminate\Cache\CacheManager|\Closure  $cache
		 * @return void
		 * @static 
		 */
		 public static function setCacheManager($cache){
			//Method inherited from \Illuminate\Database\Connection
			 \Illuminate\Database\SQLiteConnection::setCacheManager($cache);
		 }

		/**
		 * Determine if the connection in a "dry run".
		 *
		 * @return bool
		 * @static 
		 */
		 public static function pretending(){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::pretending();
		 }

		/**
		 * Get the default fetch mode for the connection.
		 *
		 * @return int
		 * @static 
		 */
		 public static function getFetchMode(){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::getFetchMode();
		 }

		/**
		 * Set the default fetch mode for the connection.
		 *
		 * @param int  $fetchMode
		 * @return int
		 * @static 
		 */
		 public static function setFetchMode($fetchMode){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::setFetchMode($fetchMode);
		 }

		/**
		 * Get the connection query log.
		 *
		 * @return array
		 * @static 
		 */
		 public static function getQueryLog(){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::getQueryLog();
		 }

		/**
		 * Clear the query log.
		 *
		 * @return void
		 * @static 
		 */
		 public static function flushQueryLog(){
			//Method inherited from \Illuminate\Database\Connection
			 \Illuminate\Database\SQLiteConnection::flushQueryLog();
		 }

		/**
		 * Enable the query log on the connection.
		 *
		 * @return void
		 * @static 
		 */
		 public static function enableQueryLog(){
			//Method inherited from \Illuminate\Database\Connection
			 \Illuminate\Database\SQLiteConnection::enableQueryLog();
		 }

		/**
		 * Disable the query log on the connection.
		 *
		 * @return void
		 * @static 
		 */
		 public static function disableQueryLog(){
			//Method inherited from \Illuminate\Database\Connection
			 \Illuminate\Database\SQLiteConnection::disableQueryLog();
		 }

		/**
		 * Determine whether we're logging queries.
		 *
		 * @return bool
		 * @static 
		 */
		 public static function logging(){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::logging();
		 }

		/**
		 * Get the name of the connected database.
		 *
		 * @return string
		 * @static 
		 */
		 public static function getDatabaseName(){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::getDatabaseName();
		 }

		/**
		 * Set the name of the connected database.
		 *
		 * @param string  $database
		 * @return string
		 * @static 
		 */
		 public static function setDatabaseName($database){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::setDatabaseName($database);
		 }

		/**
		 * Get the table prefix for the connection.
		 *
		 * @return string
		 * @static 
		 */
		 public static function getTablePrefix(){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::getTablePrefix();
		 }

		/**
		 * Set the table prefix in use by the connection.
		 *
		 * @param string  $prefix
		 * @return void
		 * @static 
		 */
		 public static function setTablePrefix($prefix){
			//Method inherited from \Illuminate\Database\Connection
			 \Illuminate\Database\SQLiteConnection::setTablePrefix($prefix);
		 }

		/**
		 * Set the table prefix and return the grammar.
		 *
		 * @param \Illuminate\Database\Grammar  $grammar
		 * @return \Illuminate\Database\Grammar
		 * @static 
		 */
		 public static function withTablePrefix($grammar){
			//Method inherited from \Illuminate\Database\Connection
			return \Illuminate\Database\SQLiteConnection::withTablePrefix($grammar);
		 }

	}
	class Eloquent extends \Illuminate\Database\Eloquent\Model{
		/**
		 * Find a model by its primary key.
		 *
		 * @param array  $id
		 * @param array  $columns
		 * @return \Illuminate\Database\Eloquent\Model|Collection|static
		 * @static 
		 */
		 public static function findMany($id, $columns = array()){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::findMany($id, $columns);
		 }

		/**
		 * Execute the query and get the first result.
		 *
		 * @param array  $columns
		 * @return \Illuminate\Database\Eloquent\Model|static|null
		 * @static 
		 */
		 public static function first($columns = array()){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::first($columns);
		 }

		/**
		 * Execute the query and get the first result or throw an exception.
		 *
		 * @param array  $columns
		 * @return \Illuminate\Database\Eloquent\Model|static
		 * @throws ModelNotFoundException
		 * @static 
		 */
		 public static function firstOrFail($columns = array()){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::firstOrFail($columns);
		 }

		/**
		 * Execute the query as a "select" statement.
		 *
		 * @param array  $columns
		 * @return \Illuminate\Database\Eloquent\Collection|static[]
		 * @static 
		 */
		 public static function get($columns = array()){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::get($columns);
		 }

		/**
		 * Pluck a single column from the database.
		 *
		 * @param string  $column
		 * @return mixed
		 * @static 
		 */
		 public static function pluck($column){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::pluck($column);
		 }

		/**
		 * Chunk the results of the query.
		 *
		 * @param int  $count
		 * @param callable  $callback
		 * @return void
		 * @static 
		 */
		 public static function chunk($count, $callback){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			 \Illuminate\Database\Eloquent\Builder::chunk($count, $callback);
		 }

		/**
		 * Get an array with the values of a given column.
		 *
		 * @param string  $column
		 * @param string  $key
		 * @return array
		 * @static 
		 */
		 public static function lists($column, $key = null){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::lists($column, $key);
		 }

		/**
		 * Get a paginator for the "select" statement.
		 *
		 * @param int    $perPage
		 * @param array  $columns
		 * @return \Illuminate\Pagination\Paginator
		 * @static 
		 */
		 public static function paginate($perPage = null, $columns = array()){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::paginate($perPage, $columns);
		 }

		/**
		 * Increment a column's value by a given amount.
		 *
		 * @param string  $column
		 * @param int     $amount
		 * @param array   $extra
		 * @return int
		 * @static 
		 */
		 public static function increment($column, $amount = 1, $extra = array()){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::increment($column, $amount, $extra);
		 }

		/**
		 * Decrement a column's value by a given amount.
		 *
		 * @param string  $column
		 * @param int     $amount
		 * @param array   $extra
		 * @return int
		 * @static 
		 */
		 public static function decrement($column, $amount = 1, $extra = array()){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::decrement($column, $amount, $extra);
		 }

		/**
		 * Run the default delete function on the builder.
		 *
		 * @return mixed
		 * @static 
		 */
		 public static function forceDelete(){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::forceDelete();
		 }

		/**
		 * Register a replacement for the default delete function.
		 *
		 * @param \Closure  $callback
		 * @return void
		 * @static 
		 */
		 public static function onDelete($callback){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			 \Illuminate\Database\Eloquent\Builder::onDelete($callback);
		 }

		/**
		 * Get the hydrated models without eager loading.
		 *
		 * @param array  $columns
		 * @return array|static[]
		 * @static 
		 */
		 public static function getModels($columns = array()){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::getModels($columns);
		 }

		/**
		 * Eager load the relationships for the models.
		 *
		 * @param array  $models
		 * @return array
		 * @static 
		 */
		 public static function eagerLoadRelations($models){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::eagerLoadRelations($models);
		 }

		/**
		 * Add a basic where clause to the query.
		 *
		 * @param string  $column
		 * @param string  $operator
		 * @param mixed   $value
		 * @param string  $boolean
		 * @return \Illuminate\Database\Eloquent\Builder|static
		 * @static 
		 */
		 public static function where($column, $operator = null, $value = null, $boolean = 'and'){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::where($column, $operator, $value, $boolean);
		 }

		/**
		 * Add an "or where" clause to the query.
		 *
		 * @param string  $column
		 * @param string  $operator
		 * @param mixed   $value
		 * @return \Illuminate\Database\Eloquent\Builder|static
		 * @static 
		 */
		 public static function orWhere($column, $operator = null, $value = null){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::orWhere($column, $operator, $value);
		 }

		/**
		 * Add a relationship count condition to the query.
		 *
		 * @param string  $relation
		 * @param string  $operator
		 * @param int     $count
		 * @param string  $boolean
		 * @param \Closure  $callback
		 * @return \Illuminate\Database\Eloquent\Builder|static
		 * @static 
		 */
		 public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::has($relation, $operator, $count, $boolean, $callback);
		 }

		/**
		 * Add a relationship count condition to the query with where clauses.
		 *
		 * @param string  $relation
		 * @param \Closure  $callback
		 * @param string  $operator
		 * @param int     $count
		 * @return \Illuminate\Database\Eloquent\Builder|static
		 * @static 
		 */
		 public static function whereHas($relation, $callback, $operator = '>=', $count = 1){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::whereHas($relation, $callback, $operator, $count);
		 }

		/**
		 * Add a relationship count condition to the query with an "or".
		 *
		 * @param string  $relation
		 * @param string  $operator
		 * @param int     $count
		 * @return \Illuminate\Database\Eloquent\Builder|static
		 * @static 
		 */
		 public static function orHas($relation, $operator = '>=', $count = 1){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::orHas($relation, $operator, $count);
		 }

		/**
		 * Add a relationship count condition to the query with where clauses and an "or".
		 *
		 * @param string  $relation
		 * @param \Closure  $callback
		 * @param string  $operator
		 * @param int     $count
		 * @return \Illuminate\Database\Eloquent\Builder|static
		 * @static 
		 */
		 public static function orWhereHas($relation, $callback, $operator = '>=', $count = 1){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::orWhereHas($relation, $callback, $operator, $count);
		 }

		/**
		 * Get the underlying query builder instance.
		 *
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function getQuery(){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::getQuery();
		 }

		/**
		 * Set the underlying query builder instance.
		 *
		 * @param \Illuminate\Database\Query\Builder  $query
		 * @return void
		 * @static 
		 */
		 public static function setQuery($query){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			 \Illuminate\Database\Eloquent\Builder::setQuery($query);
		 }

		/**
		 * Get the relationships being eagerly loaded.
		 *
		 * @return array
		 * @static 
		 */
		 public static function getEagerLoads(){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::getEagerLoads();
		 }

		/**
		 * Set the relationships being eagerly loaded.
		 *
		 * @param array  $eagerLoad
		 * @return void
		 * @static 
		 */
		 public static function setEagerLoads($eagerLoad){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			 \Illuminate\Database\Eloquent\Builder::setEagerLoads($eagerLoad);
		 }

		/**
		 * Get the model instance being queried.
		 *
		 * @return \Illuminate\Database\Eloquent\Model
		 * @static 
		 */
		 public static function getModel(){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::getModel();
		 }

		/**
		 * Set a model instance for the model being queried.
		 *
		 * @param \Illuminate\Database\Eloquent\Model  $model
		 * @return \Illuminate\Database\Eloquent\Builder
		 * @static 
		 */
		 public static function setModel($model){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::setModel($model);
		 }

		/**
		 * Extend the builder with a given callback.
		 *
		 * @param string  $name
		 * @param \Closure  $callback
		 * @return void
		 * @static 
		 */
		 public static function macro($name, $callback){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			 \Illuminate\Database\Eloquent\Builder::macro($name, $callback);
		 }

		/**
		 * Get the given macro by name.
		 *
		 * @param string  $name
		 * @return \Closure
		 * @static 
		 */
		 public static function getMacro($name){
			//Method inherited from \Illuminate\Database\Eloquent\Builder
			return \Illuminate\Database\Eloquent\Builder::getMacro($name);
		 }

		/**
		 * Set the columns to be selected.
		 *
		 * @param array  $columns
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function select($columns = array()){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::select($columns);
		 }

		/**
		 * Add a new "raw" select expression to the query.
		 *
		 * @param string  $expression
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function selectRaw($expression){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::selectRaw($expression);
		 }

		/**
		 * Add a new select column to the query.
		 *
		 * @param mixed  $column
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function addSelect($column){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::addSelect($column);
		 }

		/**
		 * Force the query to only return distinct results.
		 *
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function distinct(){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::distinct();
		 }

		/**
		 * Set the table which the query is targeting.
		 *
		 * @param string  $table
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function from($table){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::from($table);
		 }

		/**
		 * Add a join clause to the query.
		 *
		 * @param string  $table
		 * @param string  $first
		 * @param string  $operator
		 * @param string  $two
		 * @param string  $type
		 * @param bool  $where
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function join($table, $one, $operator = null, $two = null, $type = 'inner', $where = false){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::join($table, $one, $operator, $two, $type, $where);
		 }

		/**
		 * Add a "join where" clause to the query.
		 *
		 * @param string  $table
		 * @param string  $first
		 * @param string  $operator
		 * @param string  $two
		 * @param string  $type
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function joinWhere($table, $one, $operator, $two, $type = 'inner'){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::joinWhere($table, $one, $operator, $two, $type);
		 }

		/**
		 * Add a left join to the query.
		 *
		 * @param string  $table
		 * @param string  $first
		 * @param string  $operator
		 * @param string  $second
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function leftJoin($table, $first, $operator = null, $second = null){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::leftJoin($table, $first, $operator, $second);
		 }

		/**
		 * Add a "join where" clause to the query.
		 *
		 * @param string  $table
		 * @param string  $first
		 * @param string  $operator
		 * @param string  $two
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function leftJoinWhere($table, $one, $operator, $two){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::leftJoinWhere($table, $one, $operator, $two);
		 }

		/**
		 * Add a raw where clause to the query.
		 *
		 * @param string  $sql
		 * @param array   $bindings
		 * @param string  $boolean
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function whereRaw($sql, $bindings = array(), $boolean = 'and'){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::whereRaw($sql, $bindings, $boolean);
		 }

		/**
		 * Add a raw or where clause to the query.
		 *
		 * @param string  $sql
		 * @param array   $bindings
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function orWhereRaw($sql, $bindings = array()){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::orWhereRaw($sql, $bindings);
		 }

		/**
		 * Add a where between statement to the query.
		 *
		 * @param string  $column
		 * @param array   $values
		 * @param string  $boolean
		 * @param bool  $not
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function whereBetween($column, $values, $boolean = 'and', $not = false){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::whereBetween($column, $values, $boolean, $not);
		 }

		/**
		 * Add an or where between statement to the query.
		 *
		 * @param string  $column
		 * @param array   $values
		 * @param bool  $not
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function orWhereBetween($column, $values, $not = false){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::orWhereBetween($column, $values, $not);
		 }

		/**
		 * Add a where not between statement to the query.
		 *
		 * @param string  $column
		 * @param array   $values
		 * @param string  $boolean
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function whereNotBetween($column, $values, $boolean = 'and'){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::whereNotBetween($column, $values, $boolean);
		 }

		/**
		 * Add an or where not between statement to the query.
		 *
		 * @param string  $column
		 * @param array   $values
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function orWhereNotBetween($column, $values){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::orWhereNotBetween($column, $values);
		 }

		/**
		 * Add a nested where statement to the query.
		 *
		 * @param \Closure $callback
		 * @param string   $boolean
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function whereNested($callback, $boolean = 'and'){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::whereNested($callback, $boolean);
		 }

		/**
		 * Add another query builder as a nested where to the query builder.
		 *
		 * @param \Illuminate\Database\Query\Builder|static $query
		 * @param string  $boolean
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function addNestedWhereQuery($query, $boolean = 'and'){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::addNestedWhereQuery($query, $boolean);
		 }

		/**
		 * Add an exists clause to the query.
		 *
		 * @param \Closure $callback
		 * @param string   $boolean
		 * @param bool     $not
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function whereExists($callback, $boolean = 'and', $not = false){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::whereExists($callback, $boolean, $not);
		 }

		/**
		 * Add an or exists clause to the query.
		 *
		 * @param \Closure $callback
		 * @param bool     $not
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function orWhereExists($callback, $not = false){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::orWhereExists($callback, $not);
		 }

		/**
		 * Add a where not exists clause to the query.
		 *
		 * @param \Closure $callback
		 * @param string   $boolean
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function whereNotExists($callback, $boolean = 'and'){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::whereNotExists($callback, $boolean);
		 }

		/**
		 * Add a where not exists clause to the query.
		 *
		 * @param \Closure  $callback
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function orWhereNotExists($callback){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::orWhereNotExists($callback);
		 }

		/**
		 * Add a "where in" clause to the query.
		 *
		 * @param string  $column
		 * @param mixed   $values
		 * @param string  $boolean
		 * @param bool    $not
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function whereIn($column, $values, $boolean = 'and', $not = false){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::whereIn($column, $values, $boolean, $not);
		 }

		/**
		 * Add an "or where in" clause to the query.
		 *
		 * @param string  $column
		 * @param mixed   $values
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function orWhereIn($column, $values){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::orWhereIn($column, $values);
		 }

		/**
		 * Add a "where not in" clause to the query.
		 *
		 * @param string  $column
		 * @param mixed   $values
		 * @param string  $boolean
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function whereNotIn($column, $values, $boolean = 'and'){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::whereNotIn($column, $values, $boolean);
		 }

		/**
		 * Add an "or where not in" clause to the query.
		 *
		 * @param string  $column
		 * @param mixed   $values
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function orWhereNotIn($column, $values){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::orWhereNotIn($column, $values);
		 }

		/**
		 * Add a "where null" clause to the query.
		 *
		 * @param string  $column
		 * @param string  $boolean
		 * @param bool    $not
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function whereNull($column, $boolean = 'and', $not = false){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::whereNull($column, $boolean, $not);
		 }

		/**
		 * Add an "or where null" clause to the query.
		 *
		 * @param string  $column
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function orWhereNull($column){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::orWhereNull($column);
		 }

		/**
		 * Add a "where not null" clause to the query.
		 *
		 * @param string  $column
		 * @param string  $boolean
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function whereNotNull($column, $boolean = 'and'){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::whereNotNull($column, $boolean);
		 }

		/**
		 * Add an "or where not null" clause to the query.
		 *
		 * @param string  $column
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function orWhereNotNull($column){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::orWhereNotNull($column);
		 }

		/**
		 * Add a "where day" statement to the query.
		 *
		 * @param string  $column
		 * @param string   $operator
		 * @param int   $value
		 * @param string   $boolean
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function whereDay($column, $operator, $value, $boolean = 'and'){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::whereDay($column, $operator, $value, $boolean);
		 }

		/**
		 * Add a "where month" statement to the query.
		 *
		 * @param string  $column
		 * @param string   $operator
		 * @param int   $value
		 * @param string   $boolean
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function whereMonth($column, $operator, $value, $boolean = 'and'){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::whereMonth($column, $operator, $value, $boolean);
		 }

		/**
		 * Add a "where year" statement to the query.
		 *
		 * @param string  $column
		 * @param string   $operator
		 * @param int   $value
		 * @param string   $boolean
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function whereYear($column, $operator, $value, $boolean = 'and'){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::whereYear($column, $operator, $value, $boolean);
		 }

		/**
		 * Handles dynamic "where" clauses to the query.
		 *
		 * @param string  $method
		 * @param string  $parameters
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function dynamicWhere($method, $parameters){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::dynamicWhere($method, $parameters);
		 }

		/**
		 * Add a "group by" clause to the query.
		 *
		 * @param dynamic  $columns
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function groupBy(){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::groupBy();
		 }

		/**
		 * Add a "having" clause to the query.
		 *
		 * @param string  $column
		 * @param string  $operator
		 * @param string  $value
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function having($column, $operator = null, $value = null){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::having($column, $operator, $value);
		 }

		/**
		 * Add a raw having clause to the query.
		 *
		 * @param string  $sql
		 * @param array   $bindings
		 * @param string  $boolean
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function havingRaw($sql, $bindings = array(), $boolean = 'and'){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::havingRaw($sql, $bindings, $boolean);
		 }

		/**
		 * Add a raw or having clause to the query.
		 *
		 * @param string  $sql
		 * @param array   $bindings
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function orHavingRaw($sql, $bindings = array()){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::orHavingRaw($sql, $bindings);
		 }

		/**
		 * Add an "order by" clause to the query.
		 *
		 * @param string  $column
		 * @param string  $direction
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function orderBy($column, $direction = 'asc'){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::orderBy($column, $direction);
		 }

		/**
		 * Add an "order by" clause for a timestamp to the query.
		 *
		 * @param string  $column
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function latest($column = 'created_at'){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::latest($column);
		 }

		/**
		 * Add an "order by" clause for a timestamp to the query.
		 *
		 * @param string  $column
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function oldest($column = 'created_at'){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::oldest($column);
		 }

		/**
		 * Add a raw "order by" clause to the query.
		 *
		 * @param string  $sql
		 * @param array  $bindings
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function orderByRaw($sql, $bindings = array()){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::orderByRaw($sql, $bindings);
		 }

		/**
		 * Set the "offset" value of the query.
		 *
		 * @param int  $value
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function offset($value){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::offset($value);
		 }

		/**
		 * Alias to set the "offset" value of the query.
		 *
		 * @param int  $value
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function skip($value){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::skip($value);
		 }

		/**
		 * Set the "limit" value of the query.
		 *
		 * @param int  $value
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function limit($value){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::limit($value);
		 }

		/**
		 * Alias to set the "limit" value of the query.
		 *
		 * @param int  $value
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function take($value){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::take($value);
		 }

		/**
		 * Set the limit and offset for a given page.
		 *
		 * @param int  $page
		 * @param int  $perPage
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function forPage($page, $perPage = 15){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::forPage($page, $perPage);
		 }

		/**
		 * Add a union statement to the query.
		 *
		 * @param \Illuminate\Database\Query\Builder|\Closure  $query
		 * @param bool $all
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function union($query, $all = false){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::union($query, $all);
		 }

		/**
		 * Add a union all statement to the query.
		 *
		 * @param \Illuminate\Database\Query\Builder|\Closure  $query
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function unionAll($query){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::unionAll($query);
		 }

		/**
		 * Lock the selected rows in the table.
		 *
		 * @param bool  $update
		 * @return \Illuminate\Database\Query\Builder
		 * @static 
		 */
		 public static function lock($value = true){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::lock($value);
		 }

		/**
		 * Lock the selected rows in the table for updating.
		 *
		 * @return \Illuminate\Database\Query\Builder
		 * @static 
		 */
		 public static function lockForUpdate(){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::lockForUpdate();
		 }

		/**
		 * Share lock the selected rows in the table.
		 *
		 * @return \Illuminate\Database\Query\Builder
		 * @static 
		 */
		 public static function sharedLock(){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::sharedLock();
		 }

		/**
		 * Get the SQL representation of the query.
		 *
		 * @return string
		 * @static 
		 */
		 public static function toSql(){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::toSql();
		 }

		/**
		 * Indicate that the query results should be cached.
		 *
		 * @param \DateTime|int  $minutes
		 * @param string  $key
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function remember($minutes, $key = null){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::remember($minutes, $key);
		 }

		/**
		 * Indicate that the query results should be cached forever.
		 *
		 * @param string  $key
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function rememberForever($key = null){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::rememberForever($key);
		 }

		/**
		 * Indicate that the results, if cached, should use the given cache tags.
		 *
		 * @param array|dynamic  $cacheTags
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function cacheTags($cacheTags){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::cacheTags($cacheTags);
		 }

		/**
		 * Indicate that the results, if cached, should use the given cache driver.
		 *
		 * @param string  $cacheDriver
		 * @return \Illuminate\Database\Query\Builder|static
		 * @static 
		 */
		 public static function cacheDriver($cacheDriver){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::cacheDriver($cacheDriver);
		 }

		/**
		 * Execute the query as a fresh "select" statement.
		 *
		 * @param array  $columns
		 * @return array|static[]
		 * @static 
		 */
		 public static function getFresh($columns = array()){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::getFresh($columns);
		 }

		/**
		 * Execute the query as a cached "select" statement.
		 *
		 * @param array  $columns
		 * @return array
		 * @static 
		 */
		 public static function getCached($columns = array()){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::getCached($columns);
		 }

		/**
		 * Get a unique cache key for the complete query.
		 *
		 * @return string
		 * @static 
		 */
		 public static function getCacheKey(){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::getCacheKey();
		 }

		/**
		 * Generate the unique cache key for the query.
		 *
		 * @return string
		 * @static 
		 */
		 public static function generateCacheKey(){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::generateCacheKey();
		 }

		/**
		 * Concatenate values of a given column as a string.
		 *
		 * @param string  $column
		 * @param string  $glue
		 * @return string
		 * @static 
		 */
		 public static function implode($column, $glue = null){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::implode($column, $glue);
		 }

		/**
		 * Build a paginator instance from a raw result array.
		 *
		 * @param \Illuminate\Pagination\Factory  $paginator
		 * @param array  $results
		 * @param int    $perPage
		 * @return \Illuminate\Pagination\Paginator
		 * @static 
		 */
		 public static function buildRawPaginator($paginator, $results, $perPage){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::buildRawPaginator($paginator, $results, $perPage);
		 }

		/**
		 * Get the count of the total records for pagination.
		 *
		 * @return int
		 * @static 
		 */
		 public static function getPaginationCount(){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::getPaginationCount();
		 }

		/**
		 * Determine if any rows exist for the current query.
		 *
		 * @return bool
		 * @static 
		 */
		 public static function exists(){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::exists();
		 }

		/**
		 * Retrieve the "count" result of the query.
		 *
		 * @param string  $column
		 * @return int
		 * @static 
		 */
		 public static function count($column = '*'){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::count($column);
		 }

		/**
		 * Retrieve the minimum value of a given column.
		 *
		 * @param string  $column
		 * @return mixed
		 * @static 
		 */
		 public static function min($column){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::min($column);
		 }

		/**
		 * Retrieve the maximum value of a given column.
		 *
		 * @param string  $column
		 * @return mixed
		 * @static 
		 */
		 public static function max($column){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::max($column);
		 }

		/**
		 * Retrieve the sum of the values of a given column.
		 *
		 * @param string  $column
		 * @return mixed
		 * @static 
		 */
		 public static function sum($column){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::sum($column);
		 }

		/**
		 * Retrieve the average of the values of a given column.
		 *
		 * @param string  $column
		 * @return mixed
		 * @static 
		 */
		 public static function avg($column){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::avg($column);
		 }

		/**
		 * Execute an aggregate function on the database.
		 *
		 * @param string  $function
		 * @param array   $columns
		 * @return mixed
		 * @static 
		 */
		 public static function aggregate($function, $columns = array()){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::aggregate($function, $columns);
		 }

		/**
		 * Insert a new record into the database.
		 *
		 * @param array  $values
		 * @return bool
		 * @static 
		 */
		 public static function insert($values){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::insert($values);
		 }

		/**
		 * Insert a new record and get the value of the primary key.
		 *
		 * @param array   $values
		 * @param string  $sequence
		 * @return int
		 * @static 
		 */
		 public static function insertGetId($values, $sequence = null){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::insertGetId($values, $sequence);
		 }

		/**
		 * Run a truncate statement on the table.
		 *
		 * @return void
		 * @static 
		 */
		 public static function truncate(){
			//Method inherited from \Illuminate\Database\Query\Builder
			 \Illuminate\Database\Query\Builder::truncate();
		 }

		/**
		 * Merge an array of where clauses and bindings.
		 *
		 * @param array  $wheres
		 * @param array  $bindings
		 * @return void
		 * @static 
		 */
		 public static function mergeWheres($wheres, $bindings){
			//Method inherited from \Illuminate\Database\Query\Builder
			 \Illuminate\Database\Query\Builder::mergeWheres($wheres, $bindings);
		 }

		/**
		 * Create a raw database expression.
		 *
		 * @param mixed  $value
		 * @return \Illuminate\Database\Query\Expression
		 * @static 
		 */
		 public static function raw($value){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::raw($value);
		 }

		/**
		 * Get the current query value bindings.
		 *
		 * @return array
		 * @static 
		 */
		 public static function getBindings(){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::getBindings();
		 }

		/**
		 * Set the bindings on the query builder.
		 *
		 * @param array  $bindings
		 * @return \Illuminate\Database\Query\Builder
		 * @static 
		 */
		 public static function setBindings($bindings){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::setBindings($bindings);
		 }

		/**
		 * Add a binding to the query.
		 *
		 * @param mixed  $value
		 * @return \Illuminate\Database\Query\Builder
		 * @static 
		 */
		 public static function addBinding($value){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::addBinding($value);
		 }

		/**
		 * Merge an array of bindings into our bindings.
		 *
		 * @param \Illuminate\Database\Query\Builder  $query
		 * @return \Illuminate\Database\Query\Builder
		 * @static 
		 */
		 public static function mergeBindings($query){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::mergeBindings($query);
		 }

		/**
		 * Get the database query processor instance.
		 *
		 * @return \Illuminate\Database\Query\Processors\Processor
		 * @static 
		 */
		 public static function getProcessor(){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::getProcessor();
		 }

		/**
		 * Get the query grammar instance.
		 *
		 * @return \Illuminate\Database\Grammar
		 * @static 
		 */
		 public static function getGrammar(){
			//Method inherited from \Illuminate\Database\Query\Builder
			return \Illuminate\Database\Query\Builder::getGrammar();
		 }

	}
	class Event extends \Illuminate\Support\Facades\Event{
		/**
		 * Create a new event dispatcher instance.
		 *
		 * @param \Illuminate\Container\Container  $container
		 * @return void
		 * @static 
		 */
		 public static function __construct($container = null){
			//Method inherited from \Illuminate\Events\Dispatcher
			 \Illuminate\Events\Dispatcher::__construct($container);
		 }

		/**
		 * Register an event listener with the dispatcher.
		 *
		 * @param string|array  $event
		 * @param mixed   $listener
		 * @param int     $priority
		 * @return void
		 * @static 
		 */
		 public static function listen($events, $listener, $priority = 0){
			//Method inherited from \Illuminate\Events\Dispatcher
			 \Illuminate\Events\Dispatcher::listen($events, $listener, $priority);
		 }

		/**
		 * Determine if a given event has listeners.
		 *
		 * @param string  $eventName
		 * @return bool
		 * @static 
		 */
		 public static function hasListeners($eventName){
			//Method inherited from \Illuminate\Events\Dispatcher
			return \Illuminate\Events\Dispatcher::hasListeners($eventName);
		 }

		/**
		 * Register a queued event and payload.
		 *
		 * @param string  $event
		 * @param array   $payload
		 * @return void
		 * @static 
		 */
		 public static function queue($event, $payload = array()){
			//Method inherited from \Illuminate\Events\Dispatcher
			 \Illuminate\Events\Dispatcher::queue($event, $payload);
		 }

		/**
		 * Register an event subscriber with the dispatcher.
		 *
		 * @param string  $subscriber
		 * @return void
		 * @static 
		 */
		 public static function subscribe($subscriber){
			//Method inherited from \Illuminate\Events\Dispatcher
			 \Illuminate\Events\Dispatcher::subscribe($subscriber);
		 }

		/**
		 * Fire an event until the first non-null response is returned.
		 *
		 * @param string  $event
		 * @param array   $payload
		 * @return mixed
		 * @static 
		 */
		 public static function until($event, $payload = array()){
			//Method inherited from \Illuminate\Events\Dispatcher
			return \Illuminate\Events\Dispatcher::until($event, $payload);
		 }

		/**
		 * Flush a set of queued events.
		 *
		 * @param string  $event
		 * @return void
		 * @static 
		 */
		 public static function flush($event){
			//Method inherited from \Illuminate\Events\Dispatcher
			 \Illuminate\Events\Dispatcher::flush($event);
		 }

		/**
		 * Get the event that is currently firing.
		 *
		 * @return string
		 * @static 
		 */
		 public static function firing(){
			//Method inherited from \Illuminate\Events\Dispatcher
			return \Illuminate\Events\Dispatcher::firing();
		 }

		/**
		 * Fire an event and call the listeners.
		 *
		 * @param string  $event
		 * @param mixed   $payload
		 * @param bool    $halt
		 * @return array|null
		 * @static 
		 */
		 public static function fire($event, $payload = array(), $halt = false){
			//Method inherited from \Illuminate\Events\Dispatcher
			return \Illuminate\Events\Dispatcher::fire($event, $payload, $halt);
		 }

		/**
		 * Get all of the listeners for a given event name.
		 *
		 * @param string  $eventName
		 * @return array
		 * @static 
		 */
		 public static function getListeners($eventName){
			//Method inherited from \Illuminate\Events\Dispatcher
			return \Illuminate\Events\Dispatcher::getListeners($eventName);
		 }

		/**
		 * Register an event listener with the dispatcher.
		 *
		 * @param mixed   $listener
		 * @return mixed
		 * @static 
		 */
		 public static function makeListener($listener){
			//Method inherited from \Illuminate\Events\Dispatcher
			return \Illuminate\Events\Dispatcher::makeListener($listener);
		 }

		/**
		 * Create a class based listener using the IoC container.
		 *
		 * @param mixed    $listener
		 * @return \Closure
		 * @static 
		 */
		 public static function createClassListener($listener){
			//Method inherited from \Illuminate\Events\Dispatcher
			return \Illuminate\Events\Dispatcher::createClassListener($listener);
		 }

		/**
		 * Remove a set of listeners from the dispatcher.
		 *
		 * @param string  $event
		 * @return void
		 * @static 
		 */
		 public static function forget($event){
			//Method inherited from \Illuminate\Events\Dispatcher
			 \Illuminate\Events\Dispatcher::forget($event);
		 }

	}
	class File extends \Illuminate\Support\Facades\File{
		/**
		 * Determine if a file exists.
		 *
		 * @param string  $path
		 * @return bool
		 * @static 
		 */
		 public static function exists($path){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::exists($path);
		 }

		/**
		 * Get the contents of a file.
		 *
		 * @param string  $path
		 * @return string
		 * @throws FileNotFoundException
		 * @static 
		 */
		 public static function get($path){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::get($path);
		 }

		/**
		 * Get the returned value of a file.
		 *
		 * @param string  $path
		 * @return mixed
		 * @throws FileNotFoundException
		 * @static 
		 */
		 public static function getRequire($path){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::getRequire($path);
		 }

		/**
		 * Require the given file once.
		 *
		 * @param string  $file
		 * @return mixed
		 * @static 
		 */
		 public static function requireOnce($file){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::requireOnce($file);
		 }

		/**
		 * Write the contents of a file.
		 *
		 * @param string  $path
		 * @param string  $contents
		 * @return int
		 * @static 
		 */
		 public static function put($path, $contents){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::put($path, $contents);
		 }

		/**
		 * Prepend to a file.
		 *
		 * @param string  $path
		 * @param string  $data
		 * @return int
		 * @static 
		 */
		 public static function prepend($path, $data){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::prepend($path, $data);
		 }

		/**
		 * Append to a file.
		 *
		 * @param string  $path
		 * @param string  $data
		 * @return int
		 * @static 
		 */
		 public static function append($path, $data){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::append($path, $data);
		 }

		/**
		 * Delete the file at a given path.
		 *
		 * @param string|array  $paths
		 * @return bool
		 * @static 
		 */
		 public static function delete($paths){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::delete($paths);
		 }

		/**
		 * Move a file to a new location.
		 *
		 * @param string  $path
		 * @param string  $target
		 * @return bool
		 * @static 
		 */
		 public static function move($path, $target){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::move($path, $target);
		 }

		/**
		 * Copy a file to a new location.
		 *
		 * @param string  $path
		 * @param string  $target
		 * @return bool
		 * @static 
		 */
		 public static function copy($path, $target){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::copy($path, $target);
		 }

		/**
		 * Extract the file extension from a file path.
		 *
		 * @param string  $path
		 * @return string
		 * @static 
		 */
		 public static function extension($path){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::extension($path);
		 }

		/**
		 * Get the file type of a given file.
		 *
		 * @param string  $path
		 * @return string
		 * @static 
		 */
		 public static function type($path){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::type($path);
		 }

		/**
		 * Get the file size of a given file.
		 *
		 * @param string  $path
		 * @return int
		 * @static 
		 */
		 public static function size($path){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::size($path);
		 }

		/**
		 * Get the file's last modification time.
		 *
		 * @param string  $path
		 * @return int
		 * @static 
		 */
		 public static function lastModified($path){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::lastModified($path);
		 }

		/**
		 * Determine if the given path is a directory.
		 *
		 * @param string  $directory
		 * @return bool
		 * @static 
		 */
		 public static function isDirectory($directory){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::isDirectory($directory);
		 }

		/**
		 * Determine if the given path is writable.
		 *
		 * @param string  $path
		 * @return bool
		 * @static 
		 */
		 public static function isWritable($path){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::isWritable($path);
		 }

		/**
		 * Determine if the given path is a file.
		 *
		 * @param string  $file
		 * @return bool
		 * @static 
		 */
		 public static function isFile($file){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::isFile($file);
		 }

		/**
		 * Find path names matching a given pattern.
		 *
		 * @param string  $pattern
		 * @param int     $flags
		 * @return array
		 * @static 
		 */
		 public static function glob($pattern, $flags = 0){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::glob($pattern, $flags);
		 }

		/**
		 * Get an array of all files in a directory.
		 *
		 * @param string  $directory
		 * @return array
		 * @static 
		 */
		 public static function files($directory){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::files($directory);
		 }

		/**
		 * Get all of the files from the given directory (recursive).
		 *
		 * @param string  $directory
		 * @return array
		 * @static 
		 */
		 public static function allFiles($directory){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::allFiles($directory);
		 }

		/**
		 * Get all of the directories within a given directory.
		 *
		 * @param string  $directory
		 * @return array
		 * @static 
		 */
		 public static function directories($directory){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::directories($directory);
		 }

		/**
		 * Create a directory.
		 *
		 * @param string  $path
		 * @param int     $mode
		 * @param bool    $recursive
		 * @param bool    $force
		 * @return bool
		 * @static 
		 */
		 public static function makeDirectory($path, $mode = 493, $recursive = false, $force = false){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::makeDirectory($path, $mode, $recursive, $force);
		 }

		/**
		 * Copy a directory from one location to another.
		 *
		 * @param string  $directory
		 * @param string  $destination
		 * @param int     $options
		 * @return bool
		 * @static 
		 */
		 public static function copyDirectory($directory, $destination, $options = null){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::copyDirectory($directory, $destination, $options);
		 }

		/**
		 * Recursively delete a directory.
		 * 
		 * The directory itself may be optionally preserved.
		 *
		 * @param string  $directory
		 * @param bool    $preserve
		 * @return bool
		 * @static 
		 */
		 public static function deleteDirectory($directory, $preserve = false){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::deleteDirectory($directory, $preserve);
		 }

		/**
		 * Empty the specified directory of all files and folders.
		 *
		 * @param string  $directory
		 * @return bool
		 * @static 
		 */
		 public static function cleanDirectory($directory){
			//Method inherited from \Illuminate\Filesystem\Filesystem
			return \Illuminate\Filesystem\Filesystem::cleanDirectory($directory);
		 }

	}


	class Schema extends \Illuminate\Support\Facades\Schema{
		/**
		 * Create a new database Schema manager.
		 *
		 * @param \Illuminate\Database\Connection  $connection
		 * @return void
		 * @static 
		 */
		 public static function __construct($connection){
			//Method inherited from \Illuminate\Database\Schema\Builder
			 \Illuminate\Database\Schema\Builder::__construct($connection);
		 }

		/**
		 * Determine if the given table exists.
		 *
		 * @param string  $table
		 * @return bool
		 * @static 
		 */
		 public static function hasTable($table){
			//Method inherited from \Illuminate\Database\Schema\Builder
			return \Illuminate\Database\Schema\Builder::hasTable($table);
		 }

		/**
		 * Determine if the given table has a given column.
		 *
		 * @param string  $table
		 * @param string  $column
		 * @return bool
		 * @static 
		 */
		 public static function hasColumn($table, $column){
			//Method inherited from \Illuminate\Database\Schema\Builder
			return \Illuminate\Database\Schema\Builder::hasColumn($table, $column);
		 }

		/**
		 * Modify a table on the schema.
		 *
		 * @param string   $table
		 * @param Closure  $callback
		 * @return \Illuminate\Database\Schema\Blueprint
		 * @static 
		 */
		 public static function table($table, $callback){
			//Method inherited from \Illuminate\Database\Schema\Builder
			return \Illuminate\Database\Schema\Builder::table($table, $callback);
		 }

		/**
		 * Create a new table on the schema.
		 *
		 * @param string   $table
		 * @param Closure  $callback
		 * @return \Illuminate\Database\Schema\Blueprint
		 * @static 
		 */
		 public static function create($table, $callback){
			//Method inherited from \Illuminate\Database\Schema\Builder
			return \Illuminate\Database\Schema\Builder::create($table, $callback);
		 }

		/**
		 * Drop a table from the schema.
		 *
		 * @param string  $table
		 * @return \Illuminate\Database\Schema\Blueprint
		 * @static 
		 */
		 public static function drop($table){
			//Method inherited from \Illuminate\Database\Schema\Builder
			return \Illuminate\Database\Schema\Builder::drop($table);
		 }

		/**
		 * Drop a table from the schema if it exists.
		 *
		 * @param string  $table
		 * @return \Illuminate\Database\Schema\Blueprint
		 * @static 
		 */
		 public static function dropIfExists($table){
			//Method inherited from \Illuminate\Database\Schema\Builder
			return \Illuminate\Database\Schema\Builder::dropIfExists($table);
		 }

		/**
		 * Rename a table on the schema.
		 *
		 * @param string  $from
		 * @param string  $to
		 * @return \Illuminate\Database\Schema\Blueprint
		 * @static 
		 */
		 public static function rename($from, $to){
			//Method inherited from \Illuminate\Database\Schema\Builder
			return \Illuminate\Database\Schema\Builder::rename($from, $to);
		 }

		/**
		 * Get the database connection instance.
		 *
		 * @return \Illuminate\Database\Connection
		 * @static 
		 */
		 public static function getConnection(){
			//Method inherited from \Illuminate\Database\Schema\Builder
			return \Illuminate\Database\Schema\Builder::getConnection();
		 }

		/**
		 * Set the database connection instance.
		 *
		 * @param \Illuminate\Database\Connection
		 * @return \Illuminate\Database\Schema\Builder
		 * @static 
		 */
		 public static function setConnection($connection){
			//Method inherited from \Illuminate\Database\Schema\Builder
			return \Illuminate\Database\Schema\Builder::setConnection($connection);
		 }

		/**
		 * Set the Schema Blueprint resolver callback.
		 *
		 * @param \Closure  $resolver
		 * @return void
		 * @static 
		 */
		 public static function blueprintResolver($resolver){
			//Method inherited from \Illuminate\Database\Schema\Builder
			 \Illuminate\Database\Schema\Builder::blueprintResolver($resolver);
		 }

	}
	class Seeder extends \Illuminate\Database\Seeder{
	}

    class Artisan extends \Illuminate\Support\Facades\Artisan{
        /**
         * Create and boot a new Console application.
         *
         * @param \Illuminate\Foundation\Application  $app
         * @return \Illuminate\Console\Application
         * @static
         */
        public static function start($app){
            //Method inherited from \Illuminate\Console\Application
            return \Illuminate\Console\Application::start($app);
        }

        /**
         * Create a new Console application.
         *
         * @param \Illuminate\Foundation\Application  $app
         * @return \Illuminate\Console\Application
         * @static
         */
        public static function make($app){
            //Method inherited from \Illuminate\Console\Application
            return \Illuminate\Console\Application::make($app);
        }

        /**
         * Boot the Console application.
         *
         * @return \Illuminate\Console\Application
         * @static
         */
        public static function boot(){
            //Method inherited from \Illuminate\Console\Application
            return \Illuminate\Console\Application::boot();
        }

        /**
         * Run an Artisan console command by name.
         *
         * @param string  $command
         * @param array   $parameters
         * @param \Symfony\Component\Console\Output\OutputInterface  $output
         * @return void
         * @static
         */
        public static function call($command, $parameters = array(), $output = null){
            //Method inherited from \Illuminate\Console\Application
            \Illuminate\Console\Application::call($command, $parameters, $output);
        }

        /**
         * Add a command to the console.
         *
         * @param \Symfony\Component\Console\Command\Command  $command
         * @return \Symfony\Component\Console\Command\Command
         * @static
         */
        public static function add($command){
            //Method inherited from \Illuminate\Console\Application
            return \Illuminate\Console\Application::add($command);
        }

        /**
         * Add a command, resolving through the application.
         *
         * @param string  $command
         * @return \Symfony\Component\Console\Command\Command
         * @static
         */
        public static function resolve($command){
            //Method inherited from \Illuminate\Console\Application
            return \Illuminate\Console\Application::resolve($command);
        }

        /**
         * Resolve an array of commands through the application.
         *
         * @param array|dynamic  $commands
         * @return void
         * @static
         */
        public static function resolveCommands($commands){
            //Method inherited from \Illuminate\Console\Application
            \Illuminate\Console\Application::resolveCommands($commands);
        }

        /**
         * Render the given exception.
         *
         * @param \Exception  $e
         * @param \Symfony\Component\Console\Output\OutputInterface  $output
         * @return void
         * @static
         */
        public static function renderException($e, $output){
            //Method inherited from \Illuminate\Console\Application
            \Illuminate\Console\Application::renderException($e, $output);
        }

        /**
         * Set the exception handler instance.
         *
         * @param \Illuminate\Exception\Handler  $handler
         * @return \Illuminate\Console\Application
         * @static
         */
        public static function setExceptionHandler($handler){
            //Method inherited from \Illuminate\Console\Application
            return \Illuminate\Console\Application::setExceptionHandler($handler);
        }

        /**
         * Set the Laravel application instance.
         *
         * @param \Illuminate\Foundation\Application  $laravel
         * @return \Illuminate\Console\Application
         * @static
         */
        public static function setLaravel($laravel){
            //Method inherited from \Illuminate\Console\Application
            return \Illuminate\Console\Application::setLaravel($laravel);
        }

        /**
         * Set whether the Console app should auto-exit when done.
         *
         * @param bool  $boolean
         * @return \Illuminate\Console\Application
         * @static
         */
        public static function setAutoExit($boolean){
            //Method inherited from \Illuminate\Console\Application
            return \Illuminate\Console\Application::setAutoExit($boolean);
        }

        /**
         * Constructor.
         *
         * @param string $name    The name of the application
         * @param string $version The version of the application
         * @api
         * @static
         */
        public static function __construct($name = 'UNKNOWN', $version = 'UNKNOWN'){
            //Method inherited from \Symfony\Component\Console\Application
            \Illuminate\Console\Application::__construct($name, $version);
        }

        /**
         *
         *
         * @static
         */
        public static function setDispatcher($dispatcher){
            //Method inherited from \Symfony\Component\Console\Application
            \Illuminate\Console\Application::setDispatcher($dispatcher);
        }

        /**
         * Runs the current application.
         *
         * @param InputInterface  $input  An Input instance
         * @param OutputInterface $output An Output instance
         * @return integer 0 if everything went fine, or an error code
         * @throws \Exception When doRun returns Exception
         * @api
         * @static
         */
        public static function run($input = null, $output = null){
            //Method inherited from \Symfony\Component\Console\Application
            return \Illuminate\Console\Application::run($input, $output);
        }

        /**
         * Runs the current application.
         *
         * @param InputInterface  $input  An Input instance
         * @param OutputInterface $output An Output instance
         * @return integer 0 if everything went fine, or an error code
         * @static
         */
        public static function doRun($input, $output){
            //Method inherited from \Symfony\Component\Console\Application
            return \Illuminate\Console\Application::doRun($input, $output);
        }

        /**
         * Set a helper set to be used with the command.
         *
         * @param HelperSet $helperSet The helper set
         * @api
         * @static
         */
        public static function setHelperSet($helperSet){
            //Method inherited from \Symfony\Component\Console\Application
            \Illuminate\Console\Application::setHelperSet($helperSet);
        }

        /**
         * Get the helper set associated with the command.
         *
         * @return HelperSet The HelperSet instance associated with this command
         * @api
         * @static
         */
        public static function getHelperSet(){
            //Method inherited from \Symfony\Component\Console\Application
            return \Illuminate\Console\Application::getHelperSet();
        }

        /**
         * Set an input definition set to be used with this application
         *
         * @param InputDefinition $definition The input definition
         * @api
         * @static
         */
        public static function setDefinition($definition){
            //Method inherited from \Symfony\Component\Console\Application
            \Illuminate\Console\Application::setDefinition($definition);
        }

        /**
         * Gets the InputDefinition related to this Application.
         *
         * @return InputDefinition The InputDefinition instance
         * @static
         */
        public static function getDefinition(){
            //Method inherited from \Symfony\Component\Console\Application
            return \Illuminate\Console\Application::getDefinition();
        }

        /**
         * Gets the help message.
         *
         * @return string A help message.
         * @static
         */
        public static function getHelp(){
            //Method inherited from \Symfony\Component\Console\Application
            return \Illuminate\Console\Application::getHelp();
        }

        /**
         * Sets whether to catch exceptions or not during commands execution.
         *
         * @param Boolean $boolean Whether to catch exceptions or not during commands execution
         * @api
         * @static
         */
        public static function setCatchExceptions($boolean){
            //Method inherited from \Symfony\Component\Console\Application
            \Illuminate\Console\Application::setCatchExceptions($boolean);
        }

        /**
         * Gets the name of the application.
         *
         * @return string The application name
         * @api
         * @static
         */
        public static function getName(){
            //Method inherited from \Symfony\Component\Console\Application
            return \Illuminate\Console\Application::getName();
        }

        /**
         * Sets the application name.
         *
         * @param string $name The application name
         * @api
         * @static
         */
        public static function setName($name){
            //Method inherited from \Symfony\Component\Console\Application
            \Illuminate\Console\Application::setName($name);
        }

        /**
         * Gets the application version.
         *
         * @return string The application version
         * @api
         * @static
         */
        public static function getVersion(){
            //Method inherited from \Symfony\Component\Console\Application
            return \Illuminate\Console\Application::getVersion();
        }

        /**
         * Sets the application version.
         *
         * @param string $version The application version
         * @api
         * @static
         */
        public static function setVersion($version){
            //Method inherited from \Symfony\Component\Console\Application
            \Illuminate\Console\Application::setVersion($version);
        }

        /**
         * Returns the long version of the application.
         *
         * @return string The long application version
         * @api
         * @static
         */
        public static function getLongVersion(){
            //Method inherited from \Symfony\Component\Console\Application
            return \Illuminate\Console\Application::getLongVersion();
        }

        /**
         * Registers a new command.
         *
         * @param string $name The command name
         * @return Command The newly created command
         * @api
         * @static
         */
        public static function register($name){
            //Method inherited from \Symfony\Component\Console\Application
            return \Illuminate\Console\Application::register($name);
        }

        /**
         * Adds an array of command objects.
         *
         * @param Command[] $commands An array of commands
         * @api
         * @static
         */
        public static function addCommands($commands){
            //Method inherited from \Symfony\Component\Console\Application
            \Illuminate\Console\Application::addCommands($commands);
        }

        /**
         * Returns a registered command by name or alias.
         *
         * @param string $name The command name or alias
         * @return Command A Command object
         * @throws \InvalidArgumentException When command name given does not exist
         * @api
         * @static
         */
        public static function get($name){
            //Method inherited from \Symfony\Component\Console\Application
            return \Illuminate\Console\Application::get($name);
        }

        /**
         * Returns true if the command exists, false otherwise.
         *
         * @param string $name The command name or alias
         * @return Boolean true if the command exists, false otherwise
         * @api
         * @static
         */
        public static function has($name){
            //Method inherited from \Symfony\Component\Console\Application
            return \Illuminate\Console\Application::has($name);
        }

        /**
         * Returns an array of all unique namespaces used by currently registered commands.
         *
         * It does not returns the global namespace which always exists.
         *
         * @return array An array of namespaces
         * @static
         */
        public static function getNamespaces(){
            //Method inherited from \Symfony\Component\Console\Application
            return \Illuminate\Console\Application::getNamespaces();
        }

        /**
         * Finds a registered namespace by a name or an abbreviation.
         *
         * @param string $namespace A namespace or abbreviation to search for
         * @return string A registered namespace
         * @throws \InvalidArgumentException When namespace is incorrect or ambiguous
         * @static
         */
        public static function findNamespace($namespace){
            //Method inherited from \Symfony\Component\Console\Application
            return \Illuminate\Console\Application::findNamespace($namespace);
        }

        /**
         * Finds a command by name or alias.
         *
         * Contrary to get, this command tries to find the best
         * match if you give it an abbreviation of a name or alias.
         *
         * @param string $name A command name or a command alias
         * @return Command A Command instance
         * @throws \InvalidArgumentException When command name is incorrect or ambiguous
         * @api
         * @static
         */
        public static function find($name){
            //Method inherited from \Symfony\Component\Console\Application
            return \Illuminate\Console\Application::find($name);
        }

        /**
         * Gets the commands (registered in the given namespace if provided).
         *
         * The array keys are the full names and the values the command instances.
         *
         * @param string $namespace A namespace name
         * @return Command[] An array of Command instances
         * @api
         * @static
         */
        public static function all($namespace = null){
            //Method inherited from \Symfony\Component\Console\Application
            return \Illuminate\Console\Application::all($namespace);
        }

        /**
         * Returns an array of possible abbreviations given a set of names.
         *
         * @param array $names An array of names
         * @return array An array of abbreviations
         * @static
         */
        public static function getAbbreviations($names){
            //Method inherited from \Symfony\Component\Console\Application
            return \Illuminate\Console\Application::getAbbreviations($names);
        }

        /**
         * Returns a text representation of the Application.
         *
         * @param string  $namespace An optional namespace name
         * @param boolean $raw       Whether to return raw command list
         * @return string A string representing the Application
         * @deprecated Deprecated since version 2.3, to be removed in 3.0.
         * @static
         */
        public static function asText($namespace = null, $raw = false){
            //Method inherited from \Symfony\Component\Console\Application
            return \Illuminate\Console\Application::asText($namespace, $raw);
        }

        /**
         * Returns an XML representation of the Application.
         *
         * @param string  $namespace An optional namespace name
         * @param Boolean $asDom     Whether to return a DOM or an XML string
         * @return string|\DOMDocument An XML string representing the Application
         * @deprecated Deprecated since version 2.3, to be removed in 3.0.
         * @static
         */
        public static function asXml($namespace = null, $asDom = false){
            //Method inherited from \Symfony\Component\Console\Application
            return \Illuminate\Console\Application::asXml($namespace, $asDom);
        }

        /**
         * Tries to figure out the terminal dimensions based on the current environment
         *
         * @return array Array containing width and height
         * @static
         */
        public static function getTerminalDimensions(){
            //Method inherited from \Symfony\Component\Console\Application
            return \Illuminate\Console\Application::getTerminalDimensions();
        }

        /**
         * Sets terminal dimensions.
         *
         * Can be useful to force terminal dimensions for functional tests.
         *
         * @param integer $width  The width
         * @param integer $height The height
         * @return Application The current application
         * @static
         */
        public static function setTerminalDimensions($width, $height){
            //Method inherited from \Symfony\Component\Console\Application
            return \Illuminate\Console\Application::setTerminalDimensions($width, $height);
        }

        /**
         * Returns the namespace part of the command name.
         *
         * This method is not part of public API and should not be used directly.
         *
         * @param string $name  The full name of the command
         * @param string $limit The maximum number of parts of the namespace
         * @return string The namespace of the command
         * @static
         */
        public static function extractNamespace($name, $limit = null){
            //Method inherited from \Symfony\Component\Console\Application
            return \Illuminate\Console\Application::extractNamespace($name, $limit);
        }

        /**
         * Sets the default Command name.
         *
         * @param string $commandName The Command name
         * @static
         */
        public static function setDefaultCommand($commandName){
            //Method inherited from \Symfony\Component\Console\Application
            \Illuminate\Console\Application::setDefaultCommand($commandName);
        }

        /**
         * Dynamically pass all missing methods to console Artisan.
         *
         * @param string  $method
         * @param array   $parameters
         * @return mixed
         * @static
         */
        public static function __call($method, $parameters){
            //Method inherited from \Illuminate\Foundation\Artisan
            return \Illuminate\Foundation\Artisan::__call($method, $parameters);
        }

    }

	class Cache extends \Illuminate\Support\Facades\Cache{

		/**
		 * Get a cache store instance by name.
		 *
		 * @param string|null $name
		 * @return mixed
		 * @static
		 */
		public static function store($name = null){
			return \Illuminate\Cache\CacheManager::store($name);
		}

		/**
		 * Get a cache driver instance.
		 *
		 * @param string $driver
		 * @return mixed
		 * @static
		 */
		public static function driver($driver = null){
			return \Illuminate\Cache\CacheManager::driver($driver);
		}

		/**
		 * Create a new cache repository with the given implementation.
		 *
		 * @param \Illuminate\Contracts\Cache\Store $store
		 * @return \Illuminate\Cache\Repository
		 * @static
		 */
		public static function repository($store){
			return \Illuminate\Cache\CacheManager::repository($store);
		}

		/**
		 * Get the default cache driver name.
		 *
		 * @return string
		 * @static
		 */
		public static function getDefaultDriver(){
			return \Illuminate\Cache\CacheManager::getDefaultDriver();
		}

		/**
		 * Set the default cache driver name.
		 *
		 * @param string $name
		 * @return void
		 * @static
		 */
		public static function setDefaultDriver($name){
			\Illuminate\Cache\CacheManager::setDefaultDriver($name);
		}

		/**
		 * Register a custom driver creator Closure.
		 *
		 * @param string $driver
		 * @param \Closure $callback
		 * @return $this
		 * @static
		 */
		public static function extend($driver, $callback){
			return \Illuminate\Cache\CacheManager::extend($driver, $callback);
		}

		/**
		 * Set the event dispatcher instance.
		 *
		 * @param \Illuminate\Contracts\Events\Dispatcher $events
		 * @return void
		 * @static
		 */
		public static function setEventDispatcher($events){
			\Illuminate\Cache\Repository::setEventDispatcher($events);
		}

		/**
		 * Determine if an item exists in the cache.
		 *
		 * @param string $key
		 * @return bool
		 * @static
		 */
		public static function has($key){
			return \Illuminate\Cache\Repository::has($key);
		}

		/**
		 * Retrieve an item from the cache by key.
		 *
		 * @param string $key
		 * @param mixed $default
		 * @return mixed
		 * @static
		 */
		public static function get($key, $default = null){
			return \Illuminate\Cache\Repository::get($key, $default);
		}

		/**
		 * Retrieve an item from the cache and delete it.
		 *
		 * @param string $key
		 * @param mixed $default
		 * @return mixed
		 * @static
		 */
		public static function pull($key, $default = null){
			return \Illuminate\Cache\Repository::pull($key, $default);
		}

		/**
		 * Store an item in the cache.
		 *
		 * @param string $key
		 * @param mixed $value
		 * @param \DateTime|int $minutes
		 * @return void
		 * @static
		 */
		public static function put($key, $value, $minutes){
			\Illuminate\Cache\Repository::put($key, $value, $minutes);
		}

		/**
		 * Store an item in the cache if the key does not exist.
		 *
		 * @param string $key
		 * @param mixed $value
		 * @param \DateTime|int $minutes
		 * @return bool
		 * @static
		 */
		public static function add($key, $value, $minutes){
			return \Illuminate\Cache\Repository::add($key, $value, $minutes);
		}

		/**
		 * Store an item in the cache indefinitely.
		 *
		 * @param string $key
		 * @param mixed $value
		 * @return void
		 * @static
		 */
		public static function forever($key, $value){
			\Illuminate\Cache\Repository::forever($key, $value);
		}

		/**
		 * Get an item from the cache, or store the default value.
		 *
		 * @param string $key
		 * @param \DateTime|int $minutes
		 * @param \Closure $callback
		 * @return mixed
		 * @static
		 */
		public static function remember($key, $minutes, $callback){
			return \Illuminate\Cache\Repository::remember($key, $minutes, $callback);
		}

		/**
		 * Get an item from the cache, or store the default value forever.
		 *
		 * @param string $key
		 * @param \Closure $callback
		 * @return mixed
		 * @static
		 */
		public static function sear($key, $callback){
			return \Illuminate\Cache\Repository::sear($key, $callback);
		}

		/**
		 * Get an item from the cache, or store the default value forever.
		 *
		 * @param string $key
		 * @param \Closure $callback
		 * @return mixed
		 * @static
		 */
		public static function rememberForever($key, $callback){
			return \Illuminate\Cache\Repository::rememberForever($key, $callback);
		}

		/**
		 * Remove an item from the cache.
		 *
		 * @param string $key
		 * @return bool
		 * @static
		 */
		public static function forget($key){
			return \Illuminate\Cache\Repository::forget($key);
		}

		/**
		 * Begin executing a new tags operation if the store supports it.
		 *
		 * @param string $name
		 * @return \Illuminate\Cache\TaggedCache
		 * @deprecated since version 5.1. Use tags instead.
		 * @static
		 */
		public static function section($name){
			return \Illuminate\Cache\Repository::section($name);
		}

		/**
		 * Begin executing a new tags operation if the store supports it.
		 *
		 * @param array|mixed $names
		 * @return \Illuminate\Cache\TaggedCache
		 * @throws \BadMethodCallException
		 * @static
		 */
		public static function tags($names){
			return \Illuminate\Cache\Repository::tags($names);
		}

		/**
		 * Get the default cache time.
		 *
		 * @return int
		 * @static
		 */
		public static function getDefaultCacheTime(){
			return \Illuminate\Cache\Repository::getDefaultCacheTime();
		}

		/**
		 * Set the default cache time in minutes.
		 *
		 * @param int $minutes
		 * @return void
		 * @static
		 */
		public static function setDefaultCacheTime($minutes){
			\Illuminate\Cache\Repository::setDefaultCacheTime($minutes);
		}

		/**
		 * Get the cache store implementation.
		 *
		 * @return \Illuminate\Contracts\Cache\Store
		 * @static
		 */
		public static function getStore(){
			return \Illuminate\Cache\Repository::getStore();
		}

		/**
		 * Determine if a cached value exists.
		 *
		 * @param string $key
		 * @return bool
		 * @static
		 */
		public static function offsetExists($key){
			return \Illuminate\Cache\Repository::offsetExists($key);
		}

		/**
		 * Retrieve an item from the cache by key.
		 *
		 * @param string $key
		 * @return mixed
		 * @static
		 */
		public static function offsetGet($key){
			return \Illuminate\Cache\Repository::offsetGet($key);
		}

		/**
		 * Store an item in the cache for the default time.
		 *
		 * @param string $key
		 * @param mixed $value
		 * @return void
		 * @static
		 */
		public static function offsetSet($key, $value){
			\Illuminate\Cache\Repository::offsetSet($key, $value);
		}

		/**
		 * Remove an item from the cache.
		 *
		 * @param string $key
		 * @return void
		 * @static
		 */
		public static function offsetUnset($key){
			\Illuminate\Cache\Repository::offsetUnset($key);
		}

		/**
		 * Register a custom macro.
		 *
		 * @param string $name
		 * @param callable $macro
		 * @return void
		 * @static
		 */
		public static function macro($name, $macro){
			\Illuminate\Cache\Repository::macro($name, $macro);
		}

		/**
		 * Checks if macro is registered.
		 *
		 * @param string $name
		 * @return bool
		 * @static
		 */
		public static function hasMacro($name){
			return \Illuminate\Cache\Repository::hasMacro($name);
		}

		/**
		 * Dynamically handle calls to the class.
		 *
		 * @param string $method
		 * @param array $parameters
		 * @return mixed
		 * @throws \BadMethodCallException
		 * @static
		 */
		public static function macroCall($method, $parameters){
			return \Illuminate\Cache\Repository::macroCall($method, $parameters);
		}

		/**
		 * Increment the value of an item in the cache.
		 *
		 * @param string $key
		 * @param mixed $value
		 * @return int
		 * @static
		 */
		public static function increment($key, $value = 1){
			return \Illuminate\Cache\FileStore::increment($key, $value);
		}

		/**
		 * Decrement the value of an item in the cache.
		 *
		 * @param string $key
		 * @param mixed $value
		 * @return int
		 * @static
		 */
		public static function decrement($key, $value = 1){
			return \Illuminate\Cache\FileStore::decrement($key, $value);
		}

		/**
		 * Remove all items from the cache.
		 *
		 * @return void
		 * @static
		 */
		public static function flush(){
			\Illuminate\Cache\FileStore::flush();
		}

		/**
		 * Get the Filesystem instance.
		 *
		 * @return \Illuminate\Filesystem\Filesystem
		 * @static
		 */
		public static function getFilesystem(){
			return \Illuminate\Cache\FileStore::getFilesystem();
		}

		/**
		 * Get the working directory of the cache.
		 *
		 * @return string
		 * @static
		 */
		public static function getDirectory(){
			return \Illuminate\Cache\FileStore::getDirectory();
		}

		/**
		 * Get the cache key prefix.
		 *
		 * @return string
		 * @static
		 */
		public static function getPrefix(){
			return \Illuminate\Cache\FileStore::getPrefix();
		}

	}

	class Redis extends Illuminate\Support\Facades\Redis{
		/**
		 * @var \Illuminate\Redis\Database $root
		 */
		static private $root;
		/**
		 * Create a new Redis connection instance.
		 *
		 * @static
		 * @param	string	$host
		 * @param	int	$port
		 * @param	int	$database
		 * @param	string	$password
		 */
		public static function __construct($host, $port, $database = 0, $password = null){
			self::$root->__construct($host, $port, $database, $password);
		}
		/**
		 * Connect to the Redis database.
		 *
		 * @static
		 */
		public static function connect(){
			self::$root->connect();
		}
		/**
		 * Run a command against the Redis database.
		 *
		 * @static
		 * @param	string	$method
		 * @param	array	$parameters
		 * @return mixed
		 */
		public static function command($method, $parameters = array()){
			return self::$root->command($method, $parameters);
		}
		/**
		 * Build the Redis command syntax.
		 * Redis protocol states that a command should conform to the following format:
		 * *<number of arguments> CR LF
		 * $<number of bytes of argument 1> CR LF
		 * <argument data> CR LF
		 * ...
		 * $<number of bytes of argument N> CR LF
		 * <argument data> CR LF
		 * More information regarding the Redis protocol: http://redis.io/topics/protocol
		 *
		 * @static
		 * @param	string	$method
		 * @param	array	$parameters
		 * @return string
		 */
		public static function buildCommand($method, $parameters){
			return self::$root->buildCommand($method, $parameters);
		}
		/**
		 * Parse the Redis database response.
		 *
		 * @static
		 * @param	string	$response
		 * @return mixed
		 */
		public static function parseResponse($response){
			return self::$root->parseResponse($response);
		}
		/**
		 * Read the specified number of bytes from the file resource.
		 *
		 * @static
		 * @param	int	$bytes
		 * @return string
		 */
		public static function fileRead($bytes){
			return self::$root->fileRead($bytes);
		}
		/**
		 * Get the specified number of bytes from a file line.
		 *
		 * @static
		 * @param	int	$bytes
		 * @return string
		 */
		public static function fileGet($bytes){
			return self::$root->fileGet($bytes);
		}
		/**
		 * Write the given command to the file resource.
		 *
		 * @static
		 * @param	string	$command
		 */
		public static function fileWrite($command){
			self::$root->fileWrite($command);
		}
		/**
		 * Get the Redis socket connection.
		 *
		 * @static
		 * @return resource
		 */
		public static function getConnection(){
			return self::$root->getConnection();
		}
		/**
		 * Dynamically make a Redis command.
		 *
		 * @static
		 * @param	string	$method
		 * @param	array	$parameters
		 * @return mixed
		 */
		public static function __call($method, $parameters){
			return self::$root->__call($method, $parameters);
		}
	}

	class Queue extends Illuminate\Support\Facades\Queue{
		/**
		 * @var \Illuminate\Queue\QueueInterface $root
		 */
		static private $root;
		/**
		 * Push a new job onto the queue.
		 *
		 * @static
		 * @param	string	$job
		 * @param	mixed	$data
		 * @param	string	$queue
		 */
		public static function push($job, $data = '', $queue = null){
			self::$root->push($job, $data, $queue);
		}
		/**
		 * Push a new job onto the queue after a delay.
		 *
		 * @static
		 * @param	int	$delay
		 * @param	string	$job
		 * @param	mixed	$data
		 * @param	string	$queue
		 */
		public static function later($delay, $job, $data = '', $queue = null){
			self::$root->later($delay, $job, $data, $queue);
		}
		/**
		 * Pop the next job off of the queue.
		 *
		 * @static
		 * @param	string	$queue
		 * @return \Illuminate\Queue\Jobs\Job|nul
		 */
		public static function pop($queue = null){
			return self::$root->pop($queue);
		}
	}
}

