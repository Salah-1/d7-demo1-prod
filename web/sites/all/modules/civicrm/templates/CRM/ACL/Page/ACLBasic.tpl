{*
 +--------------------------------------------------------------------+
 | CiviCRM version 5                                                  |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2019                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*}
{include file="CRM/ACL/Header.tpl" step=3}

{if $action eq 1 or $action eq 2 or $action eq 8}
<div class="crm-block crm-form-block">
   {include file="CRM/ACL/Form/ACLBasic.tpl"}
</div>
{/if}

<div class="crm-block crm-content-block">
{if $rows}
<div id="ltype">
<p></p>
    <div class="form-item">
        {strip}
        <table>
        <tr class="columnheader">
            <th>{ts}Role{/ts}</th>
            <th>{ts}ACL Type(s){/ts}</th>
            <th></th>
        </tr>
        {foreach from=$rows item=row}
        <tr class="{cycle values="odd-row,even-row"} {$row.class}{if NOT $row.is_active} disabled{/if}">
          <td>{$row.entity}</td>
          <td>{$row.object_table}</td>
          <td>{$row.action}</td>
        </tr>
        {/foreach}
        </table>
        {/strip}

        {if $action ne 1 and $action ne 2}
      <div class="action-link">
      <a href="{crmURL q="action=add&reset=1"}" id="newACL"><i class="crm-i fa-plus-circle"></i> {ts}Add ACL{/ts}</a>
        </div>
        {/if}
    </div>
</div>
{elseif $action ne 1 and $action ne 2 and $action ne 8}
    <div class="messages status no-popup">
    <dl>
        <dt><img src="{$config->resourceBase}i/Inform.gif" alt="{ts}status{/ts}"/></dt>
        {capture assign=crmURL}{crmURL q="action=add&reset=1"}{/capture}
        <dd>{ts 1=$crmURL}There are no ACLs entered. You can <a href='%1'>add one</a>.{/ts}</dd>
        </dl>
    </div>
{/if}
</div>