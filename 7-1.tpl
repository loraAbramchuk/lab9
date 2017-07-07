<form action="" method="POST" enctype="multipart/form-data">
   <table width="500" cellpadding="10" cellspacing="10" border="1" align="center" bgcolor ="lightgrey">
      <tr>
         <td colspan ="2">
            <fieldset>
               <legend>
                  <i>Информация о заказчике</i>
               </legend>
               <table width = "100%">
                  <tr>
                     <td>
                        Фамилия:
                     </td>
                     <td>
                        <input type="text1" name="fio_f" />
                     </td>
                  </tr>
                  <tr>
                     <td>
                        Имя:
                     </td>
                     <td>
                        <input type="text1" name="fio_n" />
                     </td>
                  </tr>
                  <tr>
                     <td>
                        Отчество:
                        </td>
                        <td>
                        <input type="text1" name="fio_o" />
                     </td>
                  </tr>
               </table>
            </fieldset>
         </td>
      </tr>
      <tr>
         <td >
            Выбери цвет
         </td>
         <td>
            <select size = "1" name = "select1">
               <option value = "красный"> красный </option>
               <option value = "оранжевый">оранжевый </option>
               <option value = "желтый">желтый </option>
               <option value = "зеленый">зеленый </option>
               <option value = "голубой">голубой </option>
               <option value = "синий">синий </option>
               <option value = "фиолетовый">фиолетовый </option>
            </select>
         </td>
      </tr>
      <tr>
         <td >
            Выбери количество
         </td>
         <td >
            <input type = "radio" name = "rb1" value="1" /> один 
            <input type = "radio" name = "rb1" value="2" /> два 
            <input type = "radio" name = "rb1" value="3" /> три 
         </td>
      </tr>
      <tr>
         <td >
            Способ доставки
         </td>
         <td >
            <input type = "checkbox" name = "ch1" value="курьером" id = "id1"/> 
            <label for = "id1">курьером </label> 
            <input type = "checkbox" name = "ch2" value="авиа" id = "id1"/> авиа 
            <input type = "checkbox" name = "ch3" value="авто" id = "id1"/> авто 
         </td>
      </tr>
      <tr>
         <td colspan = "2" align="center">
            <input type="submit" name="submit" value="Submit"> 
            <input type="reset" name="reset" value="reset">
			<input type="button" name="knopka" value="knopka">
         </td> 
      </tr>
        <tr>
         <td colspan = "2">
            <span style = "color: red">
                {Placeholder}
  
            </span>
         </td>
      </tr>
      
   </table>
</form>