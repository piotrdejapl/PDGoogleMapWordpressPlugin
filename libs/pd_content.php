<?php




function pd_settings() {
    
    
    add_options_page(
        'PD Google Maps',
        'PD Google Mapz',
        'manage_options',
        'pd-options',
        'pd_print_content'
    );
    
}
    
    
add_action('admin_menu', 'pd_settings');





function pd_print_content() { ?>
    
    <h2>
       PD Google Maps
    </h2>

    <?php global $pd_google_map; ?>

<form action="options.php" method="post" id="lte-fn-form-2">
    
    <?php settings_fields('pd_google_maps_options_group'); ?>
        

        
	<table class="form-table" role="presentation">
		<tbody>
			<tr>
				<th scope="row"><label for="blogname">Klucz API :</label></th>
				<td>                        
                    <input class="pd-klucz-api" name="pd_google_maps_options[klucz_api]" type="text" value="<?php echo $pd_google_map['klucz_api']; ?>">
                </td>
			</tr>
			<tr>
				<th scope="row"><label for="siteurl">Latitude :</label></th>
				<td>                        
                    <input name="pd_google_maps_options[latitude]" type="text" value="<?php echo $pd_google_map['latitude']; ?>">
                </td>
			</tr>
			<tr>
				<th scope="row"><label for="home">Longitude :</label></th>
				<td>
                        <input name="pd_google_maps_options[longitude]" type="text" value="<?php echo $pd_google_map['longitude']; ?>">
				</td>
			</tr>
			<tr>
				<th scope="row">Zoom :</th>
				<td>
					<fieldset>
                        <input name="pd_google_maps_options[zoom]" type="hidden" value="0">
                        <input name="pd_google_maps_options[zoom]" type="checkbox" value="1" <?php checked('1', $pd_google_map['zoom']); ?>>
					</fieldset>                   
				</td>
			</tr>           
			<tr>
				<th scope="row">GestureHandling :</th>
				<td>
					<fieldset>
					                       
                        <label>
                            <select name="pd_google_maps_options[gesture_handling]">
                                <option value="greedy" <?php if($pd_google_map['gesture_handling'] == 'greedy') { echo "selected='selected'"; } ?>>Greedy</option>
                                <option value="cooperative"<?php if($pd_google_map['gesture_handling'] == 'cooperative') { echo "selected='selected'"; } ?>>Cooperative</option>
                            </select>
                        </label><br>
					</fieldset>                    
				</td>
			</tr>
			<tr>
				<th scope="row">scrollWheel :</th>
				<td>
					<fieldset>
                        <input name="pd_google_maps_options[scroll_wheel]" type="hidden" value="0">
                        <input name="pd_google_maps_options[scroll_wheel]" type="checkbox" value="1" <?php checked('1', $pd_google_map['scroll_wheel']); ?>>
					</fieldset>                   
				</td>
			</tr>     
			<tr>
				<th scope="row">Zoom Control :</th>
				<td>
					<fieldset>
                        <input name="pd_google_maps_options[zoom_control]" type="hidden" value="0">
                        <input name="pd_google_maps_options[zoom_control]" type="checkbox" value="1" <?php checked('1', $pd_google_map['zoom_control']); ?>>
					</fieldset>                   
				</td>
			</tr>       
			<tr>
				<th scope="row">Draggable :</th>
				<td>
					<fieldset>
                        <input name="pd_google_maps_options[draggable]" type="hidden" value="0">
                        <input name="pd_google_maps_options[draggable]" type="checkbox" value="1" <?php checked('1', $pd_google_map['draggable']); ?>>
					</fieldset>                   
				</td>
			</tr>
			<tr>
				<th scope="row">DisableDefaultUI :</th>
				<td>
					<fieldset>
                        <input name="pd_google_maps_options[disable_default_UI]" type="hidden" value="0">
                        <input name="pd_google_maps_options[disable_default_UI]" type="checkbox" value="1" <?php checked('1', $pd_google_map['disable_default_UI']); ?>>
					</fieldset>                   
				</td>
			</tr>            

		</tbody>
	</table>   
    
    
    <input type="submit" value="Zapisz">

</form>    


<?php }

