{include file="templetes/header.tpl"}
  
  
  <div>
      <div>
          <div>
              <h2>login</h2>
              <form action="verify" method="POST" >
                  <input placeholder="email"  type="text" name="email" id="email" required>
                  <input placeholder="password"  type="password" name="password" id="password" >
                  <button type="submit">Guardar</button>
             </form>
             <h4>{$error}</h4>
          </div>
      </div>
  </div>
