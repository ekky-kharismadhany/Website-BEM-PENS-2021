@extends('layout.app')
@section('body')
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css">
<section id="calendar" class="calendar">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h3>Kalender</h3>
            <p>Agenda BEM PENS</p>
            <p>{{'event'}}</p>
        </header>
        <div id="showKaleder"></div>
    </div>
</section>
<script>
const events = <?= json_encode($event); ?>;
</script>
@endsection