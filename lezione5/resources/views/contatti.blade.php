
<div class="container py-4">
    <form action={{Route('send')}} method="post">
        @method(post)
        @csrf
      <div class="mb-3">
        <label class="form-label">Nome</label>
        <input class="form-control" value={{old('Nome')}} type="text" placeholder="Nome"/>
      </div>
  
      <!--  -->
      <div class="mb-3">
        <label class="form-label">Telefono</label>
        <input class="form-control" value={{old('Telefono')}} type="phone" placeholder="Telefono"/>
      </div>
    <!--  -->
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input class="form-control" value={{old('Email')}} type="email" placeholder="Email"/>
      </div>
      <!-- -->
      <div class="mb-3">
        <label class="form-label" >Messaggio</label>
        <textarea class="form-control" value={{old('Messaggio')}} type="text" placeholder="Messaggio" style="height: 10rem;"></textarea>
      </div>
  
      <!--  -->
      <div class="d-grid">
        <button class="btn btn-primary btn-lg">Invia</button>
      </div>
  
    </form>
  
  </div>