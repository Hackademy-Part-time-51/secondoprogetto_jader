<x-layout>
    <section class="contact-section">
        <div class="contact-intro">
          <h2 class="contact-title">Contattaci</h2>
          <p class="contact-description">
            Inserimento di un form per esercizio email
          </p>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (session('success'))
        <div class="alert alert-success">
          {{session('success')}}
        </div>              
        @endif
        <form class="contact-form" action="/sendfromcontact" method="POST">
          @csrf
          <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE" />
          <input type="hidden" name="subject" value="New Contact Form Submission from Web3Forms" />
          <input type="hidden" name="from_name" value="My Website" />
      
          <div class="form-group-container">
            <div class="form-group">
              <label for="name" class="form-label">Nome</label>
              <input id="name" name="name" value="{{old('name')}}" class="form-input" placeholder="Inserisci il tuo nome" type="text" />
            </div>
            <div class="form-group">
              <label for="surname" class="form-label">Cognome</label>
              <input id="surname" name="surname" value="{{old('surname')}}" class="form-input" placeholder="Inserisci il tuo nome" type="text" />
            </div>
            <div class="form-group">
              <label for="email" class="form-label">Email</label>
              <input id="email" name="email" value="{{old('email')}}" class="form-input" placeholder="Inserisci la tua email" type="email" />
            </div>
            <div class="form-group">
              <label for="phone" class="form-label">Numero di telefono</label>
              <input id="phone" name="phone" value="{{old('phone')}}" class="form-input" placeholder="+39 1234567890" type="text" />
            </div>
            <div class="form-group">
              <label for="web" class="form-label">Inserisci il tuo sito web</label>
              <input id="web" name="web" value="{{old('web')}}" class="form-input" placeholder="http://www.google.com" type="text" />
            </div>
            <div class="form-group">
              <label for="message" class="form-label">Messaggio</label>
              <textarea class="form-textarea" id="message" name="message" placeholder="Scrivi qua...">{{old('message')}}</textarea>
            </div>
          </div>
          <button class="form-submit" type="submit">Invia</button>
        </form>      
      </section>
</x-layout>