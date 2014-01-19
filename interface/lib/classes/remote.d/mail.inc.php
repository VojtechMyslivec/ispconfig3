<?php

/*
Copyright (c) 2007 - 2013, Till Brehm, projektfarm Gmbh
All rights reserved.

Redistribution and use in source and binary forms, with or without modification,
are permitted provided that the following conditions are met:

    * Redistributions of source code must retain the above copyright notice,
      this list of conditions and the following disclaimer.
    * Redistributions in binary form must reproduce the above copyright notice,
      this list of conditions and the following disclaimer in the documentation
      and/or other materials provided with the distribution.
    * Neither the name of ISPConfig nor the names of its contributors
      may be used to endorse or promote products derived from this software without
      specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY
OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE,
EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

--UPDATED 08.2009--
Full SOAP support for ISPConfig 3.1.4 b
Updated by Arkadiusz Roch & Artur Edelman
Copyright (c) Tri-Plex technology

--UPDATED 08.2013--
Migrated into new remote classes system
by Marius Cramer <m.cramer@pixcept.de>

*/

class remoting_mail extends remoting {
	//* Get mail domain details
	public function mail_domain_get($session_id, $primary_id)
	{
		global $app;

		if(!$this->checkPerm($session_id, 'mail_domain_get')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$app->uses('remoting_lib');
		$app->remoting_lib->loadFormDef('../mail/form/mail_domain.tform.php');
		return $app->remoting_lib->getDataRecord($primary_id);
	}

	//* Add a mail domain
	public function mail_domain_add($session_id, $client_id, $params)
	{
		if(!$this->checkPerm($session_id, 'mail_domain_add')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$primary_id = $this->insertQuery('../mail/form/mail_domain.tform.php', $client_id, $params);
		return $primary_id;
	}

	//* Update a mail domain
	public function mail_domain_update($session_id, $client_id, $primary_id, $params)
	{
		if(!$this->checkPerm($session_id, 'mail_domain_update')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->updateQuery('../mail/form/mail_domain.tform.php', $client_id, $primary_id, $params);
		return $affected_rows;
	}

	//* Delete a mail domain
	public function mail_domain_delete($session_id, $primary_id)
	{
		if(!$this->checkPerm($session_id, 'mail_domain_delete')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->deleteQuery('../mail/form/mail_domain.tform.php', $primary_id);
		return $affected_rows;
	}

	//* Get alias details
	public function mail_aliasdomain_get($session_id, $primary_id)
	{
		global $app;

		if(!$this->checkPerm($session_id, 'mail_aliasdomain_get')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$app->uses('remoting_lib');
		$app->remoting_lib->loadFormDef('../mail/form/mail_aliasdomain.tform.php');
		return $app->remoting_lib->getDataRecord($primary_id);
	}

	//* aliasy email
	public function mail_aliasdomain_add($session_id, $client_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_aliasdomain_add'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->insertQuery('../mail/form/mail_aliasdomain.tform.php', $client_id, $params);
		return $affected_rows;
	}


	public function mail_aliasdomain_update($session_id, $client_id, $primary_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_aliasdomain_update'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->updateQuery('../mail/form/mail_aliasdomain.tform.php', $client_id, $primary_id, $params);
		return $affected_rows;
	}

	public function mail_aliasdomain_delete($session_id, $primary_id)
	{
		if (!$this->checkPerm($session_id, 'mail_aliasdomain_delete'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->deleteQuery('../mail/form/mail_aliasdomain.tform.php', $primary_id);
		return $affected_rows;
	}

	//* Get mail mailinglist details
	public function mail_mailinglist_get($session_id, $primary_id)
	{
		global $app;

		if(!$this->checkPerm($session_id, 'mail_mailinglist_get')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$app->uses('remoting_lib');
		$app->remoting_lib->loadFormDef('../mail/form/mail_mailinglist.tform.php');
		return $app->remoting_lib->getDataRecord($primary_id);
	}

	//* Add a mail mailinglist
	public function mail_mailinglist_add($session_id, $client_id, $params)
	{
		if(!$this->checkPerm($session_id, 'mail_mailinglist_add')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$primary_id = $this->insertQuery('../mail/form/mail_mailinglist.tform.php', $client_id, $params);
		return $primary_id;
	}

	//* Update a mail mailinglist
	public function mail_mailinglist_update($session_id, $client_id, $primary_id, $params)
	{
		if(!$this->checkPerm($session_id, 'mail_mailinglist_update')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->updateQuery('../mail/form/mail_mailinglist.tform.php', $client_id, $primary_id, $params);
		return $affected_rows;
	}

	//* Delete a mail mailinglist
	public function mail_mailinglist_delete($session_id, $primary_id)
	{
		if(!$this->checkPerm($session_id, 'mail_mailinglist_delete')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->deleteQuery('../mail/form/mail_mailinglist.tform.php', $primary_id);
		return $affected_rows;
	}

	//* Get mail user details
	public function mail_user_get($session_id, $primary_id)
	{
		global $app;

		if(!$this->checkPerm($session_id, 'mail_user_get')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$app->uses('remoting_lib');
		$app->remoting_lib->loadFormDef('../mail/form/mail_user.tform.php');
		return $app->remoting_lib->getDataRecord($primary_id);
	}


	//* Add mail domain
	public function mail_user_add($session_id, $client_id, $params){
		global $app;

		if (!$this->checkPerm($session_id, 'mail_user_add')){
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}

		//* Check if mail domain exists
		$email_parts = explode('@', $params['email']);
		$tmp = $app->db->queryOneRecord("SELECT domain FROM mail_domain WHERE domain = '".$app->db->quote($email_parts[1])."'");
		if($tmp['domain'] != $email_parts[1]) {
			throw new SoapFault('mail_domain_does_not_exist', 'Mail domain - '.$email_parts[1].' - does not exist.');
			return false;
		}

		//* Set a few params to non empty values that will be overwritten by mail_plugin
		if (!isset($params['uid'])) $params['uid'] = 999989999;
		if (!isset($params['gid'])) $params['gid'] = 999989999;

		$affected_rows = $this->insertQuery('../mail/form/mail_user.tform.php', $client_id, $params);
		return $affected_rows;
	}

	//* Update mail user
	public function mail_user_update($session_id, $client_id, $primary_id, $params)
	{
		global $app;

		if (!$this->checkPerm($session_id, 'mail_user_update'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}

		//* Check if mail domain exists
		$email_parts = explode('@', $params['email']);
		$tmp = $app->db->queryOneRecord("SELECT domain FROM mail_domain WHERE domain = '".$app->db->quote($email_parts[1])."'");
		if($tmp['domain'] != $email_parts[1]) {
			throw new SoapFault('mail_domain_does_not_exist', 'Mail domain - '.$email_parts[1].' - does not exist.');
			return false;
		}

		$affected_rows = $this->updateQuery('../mail/form/mail_user.tform.php', $client_id, $primary_id, $params);
		return $affected_rows;
	}


	//* Delete mail user
	public function mail_user_delete($session_id, $primary_id)
	{
		if (!$this->checkPerm($session_id, 'mail_user_delete'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->deleteQuery('../mail/form/mail_user.tform.php', $primary_id);
		return $affected_rows;
	}

	//* Get mail user filter details
	public function mail_user_filter_get($session_id, $primary_id)
	{
		global $app;

		if(!$this->checkPerm($session_id, 'mail_user_filter_get')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$app->uses('remoting_lib');
		$app->remoting_lib->loadFormDef('../mail/form/mail_user_filter.tform.php');
		return $app->remoting_lib->getDataRecord($primary_id);
	}

	public function mail_user_filter_add($session_id, $client_id, $params)
	{
		global $app;
		if (!$this->checkPerm($session_id, 'mail_user_filter_add')){
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->insertQuery('../mail/form/mail_user_filter.tform.php', $client_id, $params, 'mail:mail_user_filter:on_after_insert');
		// $app->plugin->raiseEvent('mail:mail_user_filter:on_after_insert',$this);
		return $affected_rows;
	}

	public function mail_user_filter_update($session_id, $client_id, $primary_id, $params)
	{
		global $app;
		if (!$this->checkPerm($session_id, 'mail_user_filter_update'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->updateQuery('../mail/form/mail_user_filter.tform.php', $client_id, $primary_id, $params, 'mail:mail_user_filter:on_after_update');
		// $app->plugin->raiseEvent('mail:mail_user_filter:on_after_update',$this);
		return $affected_rows;
	}

	public function mail_user_filter_delete($session_id, $primary_id)
	{
		global $app;
		if (!$this->checkPerm($session_id, 'mail_user_filter_delete'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->deleteQuery('../mail/form/mail_user_filter.tform.php', $primary_id, 'mail:mail_user_filter:on_after_delete');
		// $app->plugin->raiseEvent('mail:mail_user_filter:on_after_delete',$this);
		return $affected_rows;
	}

	//* Get alias details
	public function mail_alias_get($session_id, $primary_id)
	{
		global $app;

		if(!$this->checkPerm($session_id, 'mail_alias_get')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$app->uses('remoting_lib');
		$app->remoting_lib->loadFormDef('../mail/form/mail_alias.tform.php');
		return $app->remoting_lib->getDataRecord($primary_id);
	}

	//* aliasy email
	public function mail_alias_add($session_id, $client_id, $params)
	{
		global $app;

		if (!$this->checkPerm($session_id, 'mail_alias_add'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}

		//* Check if there is no active mailbox with this address
		$tmp = $app->db->queryOneRecord("SELECT count(mailuser_id) as number FROM mail_user WHERE postfix = 'y' AND email = '".$app->db->quote($params["source"])."'");
		if($tmp['number'] > 0) {
			throw new SoapFault('duplicate', 'There is already a mailbox with this email address.');
		}
		unset($tmp);

		$affected_rows = $this->insertQuery('../mail/form/mail_alias.tform.php', $client_id, $params);
		return $affected_rows;
	}


	public function mail_alias_update($session_id, $client_id, $primary_id, $params)
	{
		global $app;

		if (!$this->checkPerm($session_id, 'mail_alias_update'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}

		//* Check if there is no active mailbox with this address
		$tmp = $app->db->queryOneRecord("SELECT count(mailuser_id) as number FROM mail_user WHERE postfix = 'y' AND email = '".$app->db->quote($params["source"])."'");
		if($tmp['number'] > 0) {
			throw new SoapFault('duplicate', 'There is already a mailbox with this email address.');
		}
		unset($tmp);

		$affected_rows = $this->updateQuery('../mail/form/mail_alias.tform.php', $client_id, $primary_id, $params);
		return $affected_rows;
	}

	public function mail_alias_delete($session_id, $primary_id)
	{
		if (!$this->checkPerm($session_id, 'mail_alias_delete'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->deleteQuery('../mail/form/mail_alias.tform.php', $primary_id);
		return $affected_rows;
	}

	//* Get mail forwarding details
	public function mail_forward_get($session_id, $primary_id)
	{
		global $app;

		if(!$this->checkPerm($session_id, 'mail_forward_get')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$app->uses('remoting_lib');
		$app->remoting_lib->loadFormDef('../mail/form/mail_forward.tform.php');
		return $app->remoting_lib->getDataRecord($primary_id);
	}

	//* przekierowania email
	public function mail_forward_add($session_id, $client_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_forward_add'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->insertQuery('../mail/form/mail_forward.tform.php', $client_id, $params);
		return $affected_rows;
	}


	public function mail_forward_update($session_id, $client_id, $primary_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_forward_update'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->updateQuery('../mail/form/mail_forward.tform.php', $client_id, $primary_id, $params);
		return $affected_rows;
	}


	public function mail_forward_delete($session_id, $primary_id)
	{
		if (!$this->checkPerm($session_id, 'mail_forward_delete'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->deleteQuery('../mail/form/mail_forward.tform.php', $primary_id);
		return $affected_rows;
	}

	//* Get catchall details
	public function mail_catchall_get($session_id, $primary_id)
	{
		global $app;

		if(!$this->checkPerm($session_id, 'mail_catchall_get')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$app->uses('remoting_lib');
		$app->remoting_lib->loadFormDef('../mail/form/mail_domain_catchall.tform.php');
		return $app->remoting_lib->getDataRecord($primary_id);
	}

	//* catchall e-mail
	public function mail_catchall_add($session_id, $client_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_catchall_add'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->insertQuery('../mail/form/mail_domain_catchall.tform.php', $client_id, $params);
		return $affected_rows;
	}

	public function mail_catchall_update($session_id, $client_id, $primary_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_catchall_update'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->updateQuery('../mail/form/mail_domain_catchall.tform.php', $client_id, $primary_id, $params);
		return $affected_rows;
	}

	public function mail_catchall_delete($session_id, $primary_id)
	{
		if (!$this->checkPerm($session_id, 'mail_catchall_delete'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->deleteQuery('../mail/form/mail_domain_catchall.tform.php', $primary_id);
		return $affected_rows;
	}

	//* Get transport details
	public function mail_transport_get($session_id, $primary_id)
	{
		global $app;

		if(!$this->checkPerm($session_id, 'mail_transport_get')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$app->uses('remoting_lib');
		$app->remoting_lib->loadFormDef('../mail/form/mail_transport.tform.php');
		return $app->remoting_lib->getDataRecord($primary_id);
	}

	//* przeniesienia e-mail
	public function mail_transport_add($session_id, $client_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_transport_add'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->insertQuery('../mail/form/mail_transport.tform.php', $client_id, $params);
		return $affected_rows;
	}


	public function mail_transport_update($session_id, $client_id, $primary_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_transport_update'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->updateQuery('../mail/form/mail_transport.tform.php', $client_id, $primary_id, $params);
		return $affected_rows;
	}


	public function mail_transport_delete($session_id, $primary_id)
	{
		if (!$this->checkPerm($session_id, 'mail_transport_delete'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->deleteQuery('../mail/form/mail_transport.tform.php', $primary_id);
		return $affected_rows;
	}

	//* Get mail relay_recipient details
	public function mail_relay_recipient_get($session_id, $primary_id)
	{
		global $app;

		if(!$this->checkPerm($session_id, 'mail_relay_get')) {
				$this->server->fault('permission_denied', 'You do not have the permissions to access this function.');
				return false;
		}
		$app->uses('remoting_lib');
		$app->remoting_lib->loadFormDef('../mail/form/mail_relay_recipient.tform.php');
		return $app->remoting_lib->getDataRecord($primary_id);
	}


	//* relay recipient email
	public function mail_relay_recipient_add($session_id, $client_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_relay_add'))
		{
			$this->server->fault('permission_denied','You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->insertQuery('../mail/form/mail_relay_recipient.tform.php', $client_id, $params);
		return $affected_rows;
	}


	public function mail_relay_recipient_update($session_id, $client_id, $primary_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_relay_update'))
		{
			$this->server->fault('permission_denied','You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->updateQuery('../mail/form/mail_relay_recipient.tform.php', $client_id, $primary_id, $params);
		return $affected_rows;
	}


	public function mail_relay_recipient_delete($session_id, $primary_id)
	{
		if (!$this->checkPerm($session_id, 'mail_relay_delete'))
		{
			$this->server->fault('permission_denied','You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->deleteQuery('../mail/form/mail_relay_recipient.tform.php', $primary_id);
		return $affected_rows;
	}
	
	//* Get spamfilter whitelist details
	public function mail_spamfilter_whitelist_get($session_id, $primary_id)
	{
		global $app;

		if(!$this->checkPerm($session_id, 'mail_spamfilter_whitelist_get')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$app->uses('remoting_lib');
		$app->remoting_lib->loadFormDef('../mail/form/spamfilter_whitelist.tform.php');
		return $app->remoting_lib->getDataRecord($primary_id);
	}

	//* biała lista e-mail
	public function mail_spamfilter_whitelist_add($session_id, $client_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_spamfilter_whitelist_add'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->insertQuery('../mail/form/spamfilter_whitelist.tform.php', $client_id, $params);
		return $affected_rows;
	}


	public function mail_spamfilter_whitelist_update($session_id, $client_id, $primary_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_spamfilter_whitelist_update'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->updateQuery('../mail/form/spamfilter_whitelist.tform.php', $client_id, $primary_id, $params);
		return $affected_rows;
	}


	public function mail_spamfilter_whitelist_delete($session_id, $primary_id)
	{
		if (!$this->checkPerm($session_id, 'mail_spamfilter_whitelist_delete'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->deleteQuery('../mail/form/spamfilter_whitelist.tform.php', $primary_id);
		return $affected_rows;
	}

	//* Get spamfilter blacklist details
	public function mail_spamfilter_blacklist_get($session_id, $primary_id)
	{
		global $app;

		if(!$this->checkPerm($session_id, 'mail_spamfilter_blacklist_get')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$app->uses('remoting_lib');
		$app->remoting_lib->loadFormDef('../mail/form/spamfilter_blacklist.tform.php');
		return $app->remoting_lib->getDataRecord($primary_id);
	}

	//* czarna lista e-mail
	public function mail_spamfilter_blacklist_add($session_id, $client_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_spamfilter_blacklist_add'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->insertQuery('../mail/form/spamfilter_blacklist.tform.php', $client_id, $params);
		return $affected_rows;
	}


	public function mail_spamfilter_blacklist_update($session_id, $client_id, $primary_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_spamfilter_blacklist_update'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->updateQuery('../mail/form/spamfilter_blacklist.tform.php', $client_id, $primary_id, $params);
		return $affected_rows;
	}


	public function mail_spamfilter_blacklist_delete($session_id, $primary_id)
	{
		if (!$this->checkPerm($session_id, 'mail_spamfilter_blacklist_delete'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->deleteQuery('../mail/form/spamfilter_blacklist.tform.php', $primary_id);
		return $affected_rows;
	}

	//* Get spamfilter user details
	public function mail_spamfilter_user_get($session_id, $primary_id)
	{
		global $app;

		if(!$this->checkPerm($session_id, 'mail_spamfilter_user_get')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$app->uses('remoting_lib');
		$app->remoting_lib->loadFormDef('../mail/form/spamfilter_users.tform.php');
		return $app->remoting_lib->getDataRecord($primary_id);
	}

	//* filtr spamu użytkowników e-mail
	public function mail_spamfilter_user_add($session_id, $client_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_spamfilter_user_add'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->insertQuery('../mail/form/spamfilter_users.tform.php', $client_id, $params);
		return $affected_rows;
	}


	public function mail_spamfilter_user_update($session_id, $client_id, $primary_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_spamfilter_user_update'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->updateQuery('../mail/form/spamfilter_users.tform.php', $client_id, $primary_id, $params);
		return $affected_rows;
	}


	public function mail_spamfilter_user_delete($session_id, $primary_id)
	{
		if (!$this->checkPerm($session_id, 'mail_spamfilter_user_delete'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->deleteQuery('../mail/form/spamfilter_users.tform.php', $primary_id);
		return $affected_rows;
	}

	//* Get policy details
	public function mail_policy_get($session_id, $primary_id)
	{
		global $app;

		if(!$this->checkPerm($session_id, 'mail_policy_get')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$app->uses('remoting_lib');
		$app->remoting_lib->loadFormDef('../mail/form/spamfilter_policy.tform.php');
		return $app->remoting_lib->getDataRecord($primary_id);
	}

	//* polityki filtrów spamu e-mail
	public function mail_policy_add($session_id, $client_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_policy_add'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->insertQuery('../mail/form/spamfilter_policy.tform.php', $client_id, $params);
		return $affected_rows;
	}


	public function mail_policy_update($session_id, $client_id, $primary_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_policy_update'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->updateQuery('../mail/form/spamfilter_policy.tform.php', $client_id, $primary_id, $params);
		return $affected_rows;
	}


	public function mail_policy_delete($session_id, $primary_id)
	{
		if (!$this->checkPerm($session_id, 'mail_policy_delete'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->deleteQuery('../mail/form/spamfilter_policy.tform.php', $primary_id);
		return $affected_rows;
	}

	//* Get fetchmail details
	public function mail_fetchmail_get($session_id, $primary_id)
	{
		global $app;

		if(!$this->checkPerm($session_id, 'mail_fetchmail_get')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$app->uses('remoting_lib');
		$app->remoting_lib->loadFormDef('../mail/form/mail_get.tform.php');
		return $app->remoting_lib->getDataRecord($primary_id);
	}

	//* fetchmail
	public function mail_fetchmail_add($session_id, $client_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_fetchmail_add'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->insertQuery('../mail/form/mail_get.tform.php', $client_id, $params);
		return $affected_rows;
	}


	public function mail_fetchmail_update($session_id, $client_id, $primary_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_fetchmail_update'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->updateQuery('../mail/form/mail_get.tform.php', $client_id, $primary_id, $params);
		return $affected_rows;
	}


	public function mail_fetchmail_delete($session_id, $primary_id)
	{
		if (!$this->checkPerm($session_id, 'mail_fetchmail_delete'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->deleteQuery('../mail/form/mail_get.tform.php', $primary_id);
		return $affected_rows;
	}

	//* Get whitelist details
	public function mail_whitelist_get($session_id, $primary_id)
	{
		global $app;

		if(!$this->checkPerm($session_id, 'mail_whitelist_get')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$app->uses('remoting_lib');
		$app->remoting_lib->loadFormDef('../mail/form/mail_whitelist.tform.php');
		return $app->remoting_lib->getDataRecord($primary_id);
	}

	//* wpisy białej listy
	public function mail_whitelist_add($session_id, $client_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_whitelist_add'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->insertQuery('../mail/form/mail_whitelist.tform.php', $client_id, $params);
		return $affected_rows;
	}


	public function mail_whitelist_update($session_id, $client_id, $primary_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_whitelist_update'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->updateQuery('../mail/form/mail_whitelist.tform.php', $client_id, $primary_id, $params);
		return $affected_rows;
	}


	public function mail_whitelist_delete($session_id, $primary_id)
	{
		if (!$this->checkPerm($session_id, 'mail_whitelist_delete'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->deleteQuery('../mail/form/mail_whitelist.tform.php', $primary_id);
		return $affected_rows;
	}

	//* Get Blacklist details
	public function mail_blacklist_get($session_id, $primary_id)
	{
		global $app;

		if(!$this->checkPerm($session_id, 'mail_blacklist_get')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$app->uses('remoting_lib');
		$app->remoting_lib->loadFormDef('../mail/form/mail_blacklist.tform.php');
		return $app->remoting_lib->getDataRecord($primary_id);
	}

	//* wpisy białej listy
	public function mail_blacklist_add($session_id, $client_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_blacklist_add'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->insertQuery('../mail/form/mail_blacklist.tform.php', $client_id, $params);
		return $affected_rows;
	}


	public function mail_blacklist_update($session_id, $client_id, $primary_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_blacklist_update'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->updateQuery('../mail/form/mail_blacklist.tform.php', $client_id, $primary_id, $params);
		return $affected_rows;
	}


	public function mail_blacklist_delete($session_id, $primary_id)
	{
		if (!$this->checkPerm($session_id, 'mail_blacklist_delete'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->deleteQuery('../mail/form/mail_blacklist.tform.php', $primary_id);
		return $affected_rows;
	}

	//* Get filter details
	public function mail_filter_get($session_id, $primary_id)
	{
		global $app;

		if(!$this->checkPerm($session_id, 'mail_filter_get')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$app->uses('remoting_lib');
		$app->remoting_lib->loadFormDef('../mail/form/mail_content_filter.tform.php');
		return $app->remoting_lib->getDataRecord($primary_id);
	}

	//* wpisy filtrow e-mail
	public function mail_filter_add($session_id, $client_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_filter_add'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->insertQuery('../mail/form/mail_content_filter.tform.php', $client_id, $params);
		return $affected_rows;
	}


	public function mail_filter_update($session_id, $client_id, $primary_id, $params)
	{
		if (!$this->checkPerm($session_id, 'mail_filter_update'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->updateQuery('../mail/form/mail_content_filter.tform.php', $client_id, $primary_id, $params);
		return $affected_rows;
	}


	public function mail_filter_delete($session_id, $primary_id)
	{
		if (!$this->checkPerm($session_id, 'mail_filter_delete'))
		{
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		$affected_rows = $this->deleteQuery('../mail/form/mail_content_filter.tform.php', $primary_id);
		return $affected_rows;
	}

	/**
	 * Fetch the mail_domain record for the provided domain.
	 * @param int session_id
	 * @param string the fully qualified domain (or subdomain)
	 * @return array array of arrays corresponding to the mail_domain table's records
	 * @author till, benlake
	 */


	public function mail_domain_get_by_domain($session_id, $domain) {
		global $app;
		if(!$this->checkPerm($session_id, 'mail_domain_get_by_domain')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		if (!empty($domain)) {
			$domain       = $app->db->quote($domain);
			$sql            = "SELECT * FROM mail_domain WHERE domain = '$domain'";
			$result         = $app->db->queryAllRecords($sql);
			return          $result;
		}
		return false;
	}

	public function mail_domain_set_status($session_id, $primary_id, $status) {
		global $app;
		if(!$this->checkPerm($session_id, 'mail_domain_set_status')) {
			throw new SoapFault('permission_denied', 'You do not have the permissions to access this function.');
			return false;
		}
		if(in_array($status, array('active', 'inactive'))) {
			if ($status == 'active') {
				$status = 'y';
			} else {
				$status = 'n';
			}
			$sql = "UPDATE mail_domain SET active = '$status' WHERE domain_id = ".$app->functions->intval($primary_id);
			$app->db->query($sql);
			$result = $app->db->affectedRows();
			return $result;
		} else {
			throw new SoapFault('status_undefined', 'The status is not available');
			return false;
		}
	}


}

?>
