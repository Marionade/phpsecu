 
<form  action="result.php"  method="post">
    <div>
      <label  for="name">Nom :</label>
      <input  type="text"  id="name"  name="name">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="courriel"  id="courriel"  name="courriel">
    </div>
    <div>
      <label  for="phone">Numéro de téléphone :</label>
        <input  type="phone"  id="phone"  name="phone">
    </div>

    <div>
     Sujet :
    <select name="sujet">
    <option value="PHP">PHP</option>
    <option value="JS">JS</option>
    <option value="Rugby">Rugby</option>
  </select>
  </div>

    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>


