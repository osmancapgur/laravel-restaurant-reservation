@extends('admin.master');
@section('content');
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
          @if (session('message'))
              <div class="alert alert-success" role="alert">
                  {{ session('message') }}
              </div>
          @endif
          <div class="container aos-init aos-animate" data-aos="fade-up">

      <div class="section-title">
        <h2>Rezervasyon</h2>
        <p>Masa ve Tarihi Seçiniz</p>
      </div>

      <form action="{{route("admin_rezervasyon_add")}}"  method="post" role="form" class="a-form-form" data-aos="fade-up" data-aos-delay="100">
          @csrf
        <div class="row">
          <div class="col-lg-4 col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Adı" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required="">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Maili" data-rule="email" data-msg="Please enter a valid email">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Telefonu" data-rule="phone" data-msg="Telefon numaranızı giriniz" required="">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="date" name="date" class="form-control" id="date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <select class="form-control" name="time" id="time">
                              <option value="10:00">10:00</option>
                              <option value="10:30">10:30</option>
                              <option value="11:00">11:00</option>
                              <option value="11:30">11:30</option>
                              <option value="12:00">12:00</option>
                              <option value="12:30">12:30</option>
                              <option value="13:00">13:00</option>
                              <option value="13:30">13:30</option>
                              <option value="14:00">14:00</option>
                              <option value="14:30">14:30</option>
                              <option value="15:00">15:00</option>
                              <option value="15:30">15:30</option>
                              <option value="16:00">16:00</option>
                              <option value="16:30">16:30</option>
                              <option value="17:00">17:00</option>
                              <option value="17:30">17:30</option>
                              <option value="18:00">18:00</option>
                              <option value="18:30">18:30</option>
                              <option value="19:00">19:00</option>
                              <option value="19:30">19:30</option>
                              <option value="20:00">20:00</option>
                              <option value="20:30">20:30</option>
                              <option value="21:00">21:00</option>
                              <option value="21:30">21:30</option>
                              <option value="22:00">22:00</option>
                              <option value="22:30">22:30</option>
                              <option value="23:00">23:00</option>
                  </select>
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="text" class="form-control" name="visitors" id="visitors" placeholder="Ziyaretçi Sayısı" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Not" required=""></textarea>
          <div class="validate"></div>
        </div>

        <div class="text-center"><button type="submit">Rezervasyonu Kaydet</button></div>
      </form>

    </div>

        </div>
    </div>
</div>
@endsection
