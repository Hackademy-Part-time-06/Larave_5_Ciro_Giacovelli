<x-main>
<div class="container py-4">
    <form action={{Route('send')}} method="POST">
        @csrf
      <div class="mb-3">
        
        <label class="form-label">Nome</label>
        <input class="form-control" placeholder="Nome" name="nome" value={{old('nome')}}>
        @error('nome')
        {{$message}}
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Telefono</label>
        <input class="form-control" placeholder="Telefono" name="telefono" type="phone" value={{old('telefono')}}>
        @error('telefono')
          {{$message}}
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input class="form-control" type="email" placeholder="Email" name="email" value={{old('email')}} >
        @error('email')
          {{$message}}
        @enderror
      </div>
      <div class="mb-3">
        <label class="form-label" >Messaggio</label>
        <textarea class="form-control" type="text" placeholder="Messaggio" name="messaggio" style="height: 10rem;">{{old('messaggio')}}</textarea>
        @error('messaggio')
        {{$message}}
      @enderror
      </div>
      <div class="d-grid">
        <button class="btn btn-primary btn-lg" type="submit">Invia</button>
      </div>
    </form>
   
  </div>
</x-main>