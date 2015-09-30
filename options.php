<?php
$summer_saver = <<<EOD
<table>
<tr>
<td> <b>Morning Coffee:</b> </td>
<td> <b>Bacon Rolls:</b> </td>
</tr>
<tr>
<td>
<label for="morningCoffeeTime">Time:</label><input type="text" name="morningCoffeeTime" class="timepicker" required>
<label for="morningCoffeeNum">Number of Guests:</label><input type="number" name="morningCoffeeNum" maxlength=3 size=8 required>
</td>
<td>
<label for="baconTime">Time:</label><input type="text" name="baconTime" class="timepicker" required>
<label for="baconNum">Number of Guests:</label><input type="number" name="baconNum" maxlength=3 size=8 required>
</td>
</tr>
<tr>
<td> <label for="diet">Please use the box below to outline any particular<br>dietry requirements. Alternatively, contact the restaurant<br>on 01565733664:</label><textarea name="diet" rows=4 cols=50 required></textarea> </td>
</tr>
<tr>
<td> <label for="message">Please enter any further comments or queries you may have:</label><textarea name="message" rows=4 cols=50 ></textarea> </td>
</tr>
<tr>
<td>
<input id="reset" name="reset" type="reset" value="Reset">
<input id="submit" name="submit" type="submit" value="Submit">
</td>
</tr>
</table>
EOD;

$full_round = <<<EOD
<table>
<tr>
<td> <b>Morning Coffee:</b> </td>
<td> <b>Lunch:</b><br><i>Homemade Soup/Sandwiches.</i></td>
</tr>
<tr>
<td>
<label for="morningCoffeeTime">Time:</label><input type="text" name="morningCoffeeTime" class="timepicker" required>
<label for="morningCoffeeNum">Number of Guests:</label><input type="number" name="morningCoffeeNum" maxlength=3 size=8 required>
</td>
<td>
<label for="lunchTime">Time:</label><input type="text" name="lunchTime" class="timepicker" required>
<label for="lunchNum">Number of Guests:</label><input type="number" name="lunchNum" maxlength=3 size=8 required>
</td>
</tr>
<tr>
<td> <b>Dinner:</b> </td>
</tr>
<tr>
<td>
<label for="dinnerTime">Time:</label><input type="text" name="dinnerTime" class="timepicker" required>
<label for="dinnerNum">Number of Guests:</label><input type="number" name="dinnerNum" maxlength=3 size=8 required>
<td>
<label for="maincourse">Select a Main:<br><i>Please ask for a selection of Vegetarian Dishes.</i></label><select id="maincourse" name="maincourse" >
<option value="" disabled selected>Choose...</option>
<option value="Homemade Steak & Guinness Pie, Chips & Peas">Homemade Steak & Guinness Pie, Chips & Peas</option>
<option value="Salmon, New Potatoes & Salad">Salmon, New Potatoes & Salad</option>
<option value="Homemade Lasagne with Garlic Bread & Salad">Homemade Lasagne with Garlic Bread & Salad</option>
<option value="Sausage & Mash with Onion Gravy & Peas">Sausage & Mash with Onion Gravy & Peas</option>
<option value="Chicken & Ham Pie with Chips & Peas">Chicken & Ham Pie with Chips & Peas</option>
</select>
<label for="dessert">Select a Dessert:</label><select id="dessert" name="dessert" >
<option value="" disabled selected>Choose...</option>
<option value="Apple & Cinnamon Crumble with Custard">Apple & Cinnamon Crumble with Custard</option>
<option value="Fruit Salad">Fruit Salad</option>
<option value="Deep Filled Apple Pie">Deep Filled Apple Pie</option>
<option value="Blackcurrant Cheesecake">Blackcurrant Cheesecake</option>
</select>
<label for="coffee">Coffee:<br><i>&pound;1.30 extra.</i></label><input type="radio" name="coffee" value="Yes"> Yes  <input type="radio" name="coffee" value="no" checked> No
</td>
</tr>
<tr>
<td> <label for="diet">Please use the box below to outline any particular<br>dietry requirements. Alternatively, contact the restaurant<br>on 01565733664:</label><textarea name="diet" rows="4" cols="50" ></textarea> </td>
</tr>
<tr>
<td> <label for="message">Please enter any further comments or queries you may have:</label><textarea name="message" rows=4 cols=50 ></textarea> </td>
</tr>
<tr>
<td>
<input id="reset" name="reset" type="reset" value="Reset">
<input id="submit" name="submit" type="submit" value="Submit">
</td>
</tr>
</table>
EOD;

$early_starter = <<<EOD
<table>
<tr>
<td> <b>Morning Coffee:</b> </td>
<td> <b>Cooked Breakfast:</b> </td>
<td> <b>Lunch:</b><br><i>Homemade Soup/Sandwiches.</i></td>
</tr>
<tr>
<td>
<label for="morningCoffeeTime">Time:</label><input type="text" name="morningCoffeeTime" class="timepicker" required>
<label for="morningCoffeeNum">Number of Guests:</label><input type="number" name="morningCoffeeNum" maxlength=3 size=8 required>
</td>
<td>
<label for="breakfastTime">Time:</label><input type="text" name="breakfastTime" class="timepicker" required>
<label for="breakfastNum">Number of Guests:</label><input type="number" name="breakfastNum" maxlength=3 size=8 required>
</td>
<td>
<label for="lunchTime">Time:</label><input type="text" name="lunchTime" class="timepicker" required>
<label for="lunchNum">Number of Guests:</label><input type="number" name="lunchNum" maxlength=3 size=8 required>
</td>
</tr>
<tr>
<td> <label for="diet">Please use the box below to outline any particular<br>dietry requirements. Alternatively, contact the restaurant<br>on 01565733664:</label><textarea name="diet" rows="4" cols="50" ></textarea> </td>
</tr>
<tr>
<td> <label for="message">Please enter any further comments or queries you may have:</label><textarea name="message" rows=4 cols=50 ></textarea> </td>
</tr>
<tr>
<td>
<input id="reset" name="reset" type="reset" value="Reset">
<input id="submit" name="submit" type="submit" value="Submit">
</td>
</tr>
</table>
EOD;

$light_lunch = <<<EOD
<table>
<tr>
<td> <b>Morning Coffee:</b> </td>
<td> <b>Lunch:</b><br><i>Homemade Soup/Sandwiches.</i></td>
</tr>
<tr>
<td>
<label for="morningCoffeeTime">Time:</label><input type="text" name="morningCoffeeTime" class="timepicker" required>
<label for="morningCoffeeNum">Number of Guests:</label><input type="number" name="morningCoffeeNum" maxlength=3 size=8 required>
</td>
<td>
<label for="lunchTime">Time:</label><input type="text" name="lunchTime" class="timepicker" required>
<label for="lunchNum">Number of Guests:</label><input type="number" name="lunchNum" maxlength=3 size=8 required>
</td>
</tr>
<tr>
<td> <label for="diet">Please use the box below to outline any particular<br>dietry requirements. Alternatively, contact the restaurant<br>on 01565733664:</label><textarea name="diet" rows="4" cols="50" ></textarea> </td>
</tr>
<tr>
<td> <label for="message">Please enter any further comments or queries you may have:</label><textarea name="message" rows=4 cols=50 ></textarea> </td>
</tr>
<tr>
<td>
<input id="reset" name="reset" type="reset" value="Reset">
<input id="submit" name="submit" type="submit" value="Submit">
</td>
</tr>
</table>
EOD;

$eighteen_holer = <<<EOD
<table>
<tr>
<td> <b>Dinner:</b> </td>
</tr>
<tr>
<td>
<label for="dinnerTime">Time:</label><input type="text" name="dinnerTime" class="timepicker" required>
<label for="dinnerNum">Number of Guests:</label><input type="number" name="dinnerNum" maxlength=3 size=8 required>
<td>
<label for="maincourse">Select a Main:<br><i>Please ask for a selection of Vegetarian Dishes.</i></label><select id="maincourse" name="maincourse" >
<option value="" disabled selected>Choose...</option>
<option value="Homemade Steak & Guinness Pie, Chips & Peas">Homemade Steak & Guinness Pie, Chips & Peas</option>
<option value="Salmon, New Potatoes & Salad">Salmon, New Potatoes & Salad</option>
<option value="Homemade Lasagne with Garlic Bread & Salad">Homemade Lasagne with Garlic Bread & Salad</option>
<option value="Sausage & Mash with Onion Gravy & Peas">Sausage & Mash with Onion Gravy & Peas</option>
<option value="Chicken & Ham Pie with Chips & Peas">Chicken & Ham Pie with Chips & Peas</option>
</select>
<label for="dessert">Select a Dessert:</label><select id="dessert" name="dessert" >
<option value="" disabled selected>Choose...</option>
<option value="Apple & Cinnamon Crumble with Custard">Apple & Cinnamon Crumble with Custard</option>
<option value="Fruit Salad">Fruit Salad</option>
<option value="Deep Filled Apple Pie">Deep Filled Apple Pie</option>
<option value="Blackcurrant Cheesecake">Blackcurrant Cheesecake</option>
</select>
<label for="coffee">Coffee:<br><i>&pound;1.30 extra.</i></label><input type="radio" name="coffee" value="Yes"> Yes  <input type="radio" name="coffee" value="no" checked> No
</td>
</tr>
<tr>
<td> <label for="diet">Please use the box below to outline any particular<br>dietry requirements. Alternatively, contact the restaurant<br>on 01565733664:</label><textarea name="diet" rows="4" cols="50" ></textarea> </td>
</tr>
<tr>
<td> <label for="message">Please enter any further comments or queries you may have:</label><textarea name="message" rows=4 cols=50 ></textarea> </td>
</tr>
<tr>
<td>
<input id="reset" name="reset" type="reset" value="Reset">
<input id="submit" name="submit" type="submit" value="Submit">
</td>
</tr>
</table>
EOD;

$value_day = <<<EOD
<table>
<tr>
<td> <b>Dinner:</b> </td>
</tr>
<tr>
<td> <label for="dinnerTime">Time:</label><input type="text" name="dinnerTime" class="timepicker" required> </td>
</tr>
<tr>
<td> <label for="dinnerNum">Number of Guests:</label><input type="number" name="dinnerNum" maxlength=3 size=8 required> </td>
</tr>
<tr>
<td> <label for="maincourse">Select a Main:<br><i>Please ask for a selection of Vegetarian Dishes.</i></label><select id="maincourse" name="maincourse" >
<option value="" disabled selected>Choose...</option>
<option value="Homemade Steak & Guinness Pie, Chips & Peas">Homemade Steak & Guinness Pie, Chips & Peas</option>
<option value="Salmon, New Potatoes & Salad">Salmon, New Potatoes & Salad</option>
<option value="Homemade Lasagne with Garlic Bread & Salad">Homemade Lasagne with Garlic Bread & Salad</option>
<option value="Sausage & Mash with Onion Gravy & Peas">Sausage & Mash with Onion Gravy & Peas</option>
<option value="Chicken & Ham Pie with Chips & Peas">Chicken & Ham Pie with Chips & Peas</option>
</select>
</td>
</tr>
<tr>
<td> <label for="diet">Please use the box below to outline any particular<br>dietry requirements. Alternatively, contact the restaurant<br>on 01565733664:</label><textarea name="diet" rows="4" cols="50" ></textarea> </td>
</tr>
<tr>
<td> <label for="message">Please enter any further comments or queries you may have:</label><textarea name="message" rows=4 cols=50 ></textarea> </td>
</tr>
<tr>
<td>
<input id="reset" name="reset" type="reset" value="Reset">
<input id="submit" name="submit" type="submit" value="Submit">
</td>
</tr>
</table>
EOD;

$easy_round = <<<EOD
<tr>
<td> <b>Morning Coffee:</b> </td>
</tr>
<tr>
<td> <label for="morningCoffeeTime">Time:</label><input type="text" name="morningCoffeeTime" class="timepicker" required> </td>
</tr>
<tr>
<td> <label for="morningCoffeeNum">Number of Guests:</label><input type="number" name="morningCoffeeNum" maxlength=3 size=8 required> </td>
</tr>
<tr>
<td> <label for="message">Please enter any further comments or queries you may have:</label><textarea name="message" rows=4 cols=50></textarea> </td>
</tr>
<tr>
<td>
<input id="reset" name="reset" type="reset" value="Reset">
<input id="submit" name="submit" type="submit" value="Submit">
</td>
</tr>
</table>
EOD;
?>