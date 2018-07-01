<?php
//increaseCountUserKilledNpcBy
//getCountUserKilledNpcBy
//getCountUserKilledNpcListBy
//updateCountUserKilledNpcBy

//BEGIN ASSIGNED TASK
/**
 * 1. Implement New Feature
 *      clear requirement with PM and EN JP
 *      list detail tasks for new feature
 */

/**
 * 2. Debug current logic on game
 *      list actions, modules need change for new logic
 *      refer files code:
 */

/**
 * 3. Write document design for Implement new feature
 *      design new tables
 *              update schema old tables if need
 *      describe the ways to do
 *          1.
 *          2.
 *          3.....
 *      describe the ways testing
 *
 *      request EN VN and JP confirm
 */
// BEGIN IMPLEMENT
/**
 * ----------------------------------
 * truncateTablesInCli: called in CLI
 *  input: query_name, bandit_id, user_id = null
 *  output: true, false
 *  check existed
 *  logic create
 *      hint
 *
 *----------------------------------
 * removeTablesInCli: called in CLI
 *  input: query_name, bandit_id, user_id = null
 *  output: true, false
 *  check existed
 *  logic create
 *      hint
 *
 * ----------------------------------
 * createTablesInCli: called in CLI
 *  input: query_name, user_id, bandit_id
 *  output: true, false
 *  check existed
 *  logic create
 *      hint
 *
 * ----------------------------------
 * getCountUserKilledNpcBy: 2 queries call in game and support tools
 *  input: query_name, user_id, bandit_id, npc_id
 *  output: array
 *  validate input
 *  $is_force_refresh = true
 *      local cache
 *  logic get data:
 *      hint
 *      params
 *  set cache
 *      query name
 *      params
 * ----------------------------------
 * updateCountUserKilledNpcBy: 1 query called in support tools
 *  input: query_name, user_id, bandit_id, npc_id, count
 *  output: true, false
 *  validate input
 *  logic update
 *      hint
 *      params
 *  clear cache
 *      query name
 *      params
 * ----------------------------------
 * increaseCountUserKilledNpcBy: 1 query called in game
 *  input: query_name, user_id, bandit_id, npc_id
 *  output: true, false
 *  get data of user
 *      hint
 *      params
 *  $count = 1
 *  if (empty user_data) {
 *      $count = $user_count + 1;
 *  }
 *  $count = $user_count + 1;
 * ----------------------------------
 * ----------------------------------
 * get data     => store cache
 * update data  => clear cache
 *
 * _executeQuery
 * _executeNoneQuery
 * _checkValidate
 * _initHint
 * _
 * ----------------------------------
 * ----------------------------------
 * test
 * create
 * delete
 * input
 * get,...
 * truncate
 * update
 * increase
 * ----------------------------------
 * ----------------------------------
 * integration in game
 */
// BEGIN CODING

code: object -> object entity => gennerate => SQL ()




