@extends('layouts.app')
@section('content')
     <div class="wrapper create-pizza">
         <h1>Create a New Pizza</h1>
         <form action="/pizza" method="POST">
             @csrf
             <label for="name">Your Name:</label>
             <input type="text" id="name" name="name">
             <label for="type">Choose pizza type</label>
             <select name="type" id="type">
                 <option value="Margherita">Margherita</option>
                 <option value="Hawaiin">Hawaiin</option>
                 <option value="Veg supreme">Veg supreme</option>
                 <option value="Volcano">Volcano</option>
             </select>
             <label for="base">Choose base type</label>
             <select name="base" id="base">
                 <option value="Cheesy crust">Cheesy crust</option>
                 <option value="Garlic crust">Garlic crust</option>
                 <option value="Thin and crispy">Thin and crispy </option>
                 <option value="Thick">Thick</option>
             </select>
             <fieldset>
                 <label for="">Extra toppings</label>
                 <input type="checkbox" name="toppings[]" value="mashrooms" id="">mashrooms <br/>
                 <input type="checkbox" name="toppings[]" value="peppers" id="">peppers<br/>
                 <input type="checkbox" name="toppings[]" value="garlic" id="">garlic<br/>
                 <input type="checkbox" name="toppings[]" value="olives" id="">olives<br/>

             </fieldset>
             <input type="submit" value="Order Pizza">
         </form>
     </div>
        @endsection