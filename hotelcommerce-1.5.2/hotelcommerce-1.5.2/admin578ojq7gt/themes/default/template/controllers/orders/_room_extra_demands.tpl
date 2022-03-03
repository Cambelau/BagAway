<div class="modal-header">
	<h3 class="modal-title"><i class="icon-tasks"></i> {l s='Additional Facilities'} {if isset($orderEdit) && $orderEdit}<span class="badge badge-success demand_edit_badge">{l s='edit'}</span>{/if} <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	</h3>
</div>
<div class="modal-body" id="rooms_extra_demands">
	<div id="room_type_demands_desc" class="row">
		<input type="hidden" value="0" id="id_htl_booking">
		{if isset($orderEdit) && $orderEdit}
			<p class="col-sm-12 facility_nav_btn">
				<button id="btn_new_room_facility" class="btn btn-success"><i class="icon-plus"></i> {l s='Add new facility'}</button>
				<button id="back_to_facilities_btn" class="btn btn-default"><i class="icon-arrow-left"></i> {l s='Back'}</button>
			</p>

			{* Already selected room demands *}
			<div class="col-sm-12 room_ordered_demands table-responsive">
				<table class="table">
					<tbody>
						{if isset($extraDemands) && $extraDemands}
							{foreach $extraDemands as $roomDemand}
								{foreach $roomDemand['extra_demands'] as $demand}
									<tr>
										<td>{$demand['name']}</td>
										<td>{displayPrice price=$demand['total_price_tax_incl'] currency=$orderCurrency}</td>
										<td><a class="btn btn-danger pull-right del-order-room-demand" href="#" id_booking_demand="{$demand['id_booking_demand']}"><i class="icon-trash"></i></a></td>
									</tr>
								{/foreach}
							{/foreach}
						{else}
							<tr>
								<td colspan="3">
									<i class="icon-warning"></i> {l s='No additional facilities added yet.'}
								</td>
							</tr>
						{/if}
					</tbody>
				</table>
			</div>

			{* Room demands available for the current editing room*}
			<div class="col-sm-12 room_demands_container">
				<div class="room_demand_detail">
					{if isset($roomTypeDemands) && $roomTypeDemands}
						{foreach $roomTypeDemands as $idGlobalDemand => $demand}
							<div class="row room_demand_block">
								<div class="col-xs-6">
									<div class="row">
										<div class="col-xs-2">
											<input id_cart_booking="{$roomDemand['id']}" value="{$idGlobalDemand|escape:'html':'UTF-8'}" type="checkbox" class="id_room_type_demand" {if  isset($roomDemand['selected_global_demands']) && $roomDemand['selected_global_demands'] && ($idGlobalDemand|in_array:$roomDemand['selected_global_demands'])}checked{/if} />
										</div>
										<div class="col-xs-10 demand_adv_option_block">
											<p>{$demand['name']|escape:'html':'UTF-8'}</p>
											{if isset($demand['adv_option']) && $demand['adv_option']}
												<select class="id_option">
													{foreach $demand['adv_option'] as $idOption => $option}
														{assign var=demand_key value="`$idGlobalDemand`-`$idOption`"}
														<option optionPrice="{$option['price']|escape:'html':'UTF-8'}" value="{$idOption|escape:'html':'UTF-8'}" {if isset($roomDemand['extra_demands'][$demand_key])}selected{/if} key="{$demand_key}">{$option['name']}</option>
														{if isset($roomDemand['extra_demands'][$demand_key])}
															{assign var=selected_adv_option value="$idOption"}
														{/if}
													{/foreach}
												</select>
											{else}
												<input type="hidden" class="id_option" value="0" />
											{/if}
										</div>
									</div>
								</div>
								<div class="col-xs-6">
									<p><span class="pull-right extra_demand_option_price">{if isset($selected_adv_option) && isset($demand['adv_option'][$selected_adv_option]['price'])}{convertPrice price = $demand['adv_option'][$selected_adv_option]['price']|escape:'html':'UTF-8'}{else}{convertPrice price = $demand['price']|escape:'html':'UTF-8'}{/if}</span></p>
								</div>
							</div>
						{/foreach}
					{/if}
				</div>
			</div>
		{elseif isset($extraDemands) && $extraDemands}
			{foreach $extraDemands as $roomDemand}
				<div class="col-sm-12">
					<div class="col-sm-12 room_demand_detail">
						{foreach $roomDemand['extra_demands'] as $demand}
							<p>
								<span>{$demand['name']}</span>
								<span class="pull-right">{displayPrice price=$demand['total_price_tax_incl'] currency=$orderCurrency}</span>
							</p>
						{/foreach}
					</div>
				</div>
			{/foreach}
		{/if}
	</div>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">{l s='Close'}</button>
	<button type="button" id="save_room_facilities" class="btn btn-success pull-right"><i class="icon-save"></i> {l s='Save'}</button>
</div>



{* Css for handling extra demands changes *}
<style type="text/css">
	/*Extra demands CSS*/
	#rooms_type_extra_demands .modal-title {
		margin: 0px;}
	#rooms_type_extra_demands .demand_edit_badge {
		font-size: 14px;}
	#rooms_extra_demands .room_ordered_demands td, #rooms_extra_demands .room_demand_detail {
		font-size: 14px;}
	#rooms_extra_demands .demand_header {
		padding: 10px;
		color: #333;
    	border-bottom: 1px solid #ddd;}
	#rooms_extra_demands .room_demand_block {
		margin-bottom: 15px;
		color: #333;
		font-size: 14px;}
	#rooms_extra_demands .facility_nav_btn {
		margin-bottom: 20px;}
	#rooms_extra_demands .room_demands_container {
		display: none;}
	#room_extra_demand_content #save_room_facilities, #room_extra_demand_content #back_to_facilities_btn {
		display: none;}
</style>

