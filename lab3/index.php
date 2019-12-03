<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>L3</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
	<form action="action.php" method="post">


		<div class="row">  
			<div class="col-md-3 text-center">
				<div class="form-group">
					<label class="btn">
						<input type="file" id="files" name="photo">
						Загрузить
						<output id="list"></output>
					</label>
				</div>
			</div>



			<div class="col-md-4"> 

				<div class="form-group">
				    <label>Фамилия</label>
				    <input type="text" class="form-control" name="Surname" placeholder="Введите вашу фамилию" required>
				</div>

				<div class="form-group">
    				<label>Имя</label>
    				<input type="text" class="form-control" name="Name" placeholder="Введите ваше имя" required>
  				</div>

  				<div class="form-group">
    				<label>Отчество</label>
    				<input type="text" class="form-control" name="Patronymic" placeholder="Введите ваше отчество" required>
  				</div>

  				<div class="form-group">
    				<label>Дата рождения</label>
    				<input type="date" class="form-control" name="DateBirth" min="1999-01-20" 
    				required>
  				</div>

  				<div class="form-row">
  					<div class="form-group col-md-6">
  					<label>Пол</label>
  					<select name="sex" class="custom-select" required>
	  					<option value="" hidden>-</option>
	  					<option value="female">Женский</option>
	  					<option value="male">Мужской</option>
	  				</select>
  				</div>
  				<div class="form-group col-md-6">
  					<label>Национальность</label>
					<select name="nation" class="custom-select" required>
						<option value="" hidden>-</option>
	  					<option value="ukr">Украинка</option>
	  					<option value="amer">Американка</option>
	  					<option value="nem">Немка</option>
	  					<option value="franz">Француженка</option>
					</select>
				</div>
  				</div>

  				<div class="form-group textarea">
				    <label>Краткая информация</label>
				    <textarea class="form-control" name="Textarea1" placeholder="Here is a some text input."></textarea>
				</div>
			</div>

			<div class="col-md-5"> 

				<div class="form-group">
				    <label>Адрес</label>
				    <input type="text" class="form-control" name="Addres" placeholder="Введите ваш адрес" required>
				</div>

				<div class="form-group">
					<label>Мои увлечения</label>
					<div class="form-check">
						<input type="checkbox" class="check-input" name="Check_1">
			    		<label class="form-check-label">Увлечение 1</label>
					</div>
					<div class="form-check">
						<input type="checkbox" class="check-input" name="Check_2">
			    		<label class="form-check-label">Увлечение 2</label>
					</div>
					<div class="form-check">
						<input type="checkbox" class="check-input" name="Check_3">
			    		<label class="form-check-label">Увлечение 3</label>
					</div>
					<div class="form-check">
						<input type="checkbox" class="check-input" name="Check_4">
			    		<label class="form-check-label">Увлечение 4</label>
					</div>
			  	</div>

			  	<div class="form-row">

			  		<div class="form-group col-md-6">
					    <label>E-mail</label>
					    <input type="email" class="form-control" name="Email" placeholder="Введите ваш e-mail" required>
					</div>

					<div class="form-group  col-md-6">
					    <label>Skype</label>
					    <input type="text" class="form-control" name="Skype" placeholder="Введите ваш Skype" required>
					</div>

			  	</div>

			  	<div class="form-group">
					    <label>Телефон</label>
					    <input type="tel" class="form-control" name="Tel" placeholder="Введите ваш номер" required>
				</div>



				<div class="form-group">
					<label>Связываться со мной: </label>
					<div class="form-check">
					  <input class="check-input" type="radio" name="touch" value="phone">По телефону				  
					</div>

					<div class="form-check">
					  <input class="check-input" type="radio" name="touch" value="email">По электронной почте
					</div>

					<div class="form-check">
					  <input class="check-input" type="radio" name="touch" value="skype">Skype
					</div>
				</div>

				<div class="form-row">
					<label>Получать рассылку </label>

				<div class="btn-group btn-group-toggle col-md-6 col-sm-6">						   			  
				  <label class="btn btn-secondary">
				    <input type="radio"	 name="Yes" checked> Да
				  </label>
				  <label class="btn btn-secondary ">
				    <input type="radio" name="No"> Нет
				  </label>
				  
				</div>
				</div>
				

			</div>

	  		<div class="col-md-12 text-center ">
		 		 <button type="submit" class="btn btn-secondary">Сохранить</button>
		 		 <button type="reset" class="btn btn-secondary">Сбросить</button>
	  		</div>	
	  </div>
	</form>
	<pre><?PHP include ("./data.txt")?></pre>
</div>

<script>
  function handleFileSelect(evt) {
    let files = evt.target.files; 

    for (let i = 0, f; f = files[i]; i++) {

     
      if (!f.type.match('image.*')) {
        continue;
      }

      let reader = new FileReader();

      reader.onload = (function(theFile) {
        return function(e) {
         
          let span = document.createElement('span');
          span.innerHTML = ['<img class="img-thumbnail" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
          document.getElementById('list').insertBefore(span, null);
        };
      })(f);

        reader.readAsDataURL(f);
    }
  }

  document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>
</body>
</html>