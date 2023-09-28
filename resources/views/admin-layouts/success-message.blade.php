@if(session('success'))
<div id="successAlert" class="alert alert-success">
    {{ session('success') }}
</div>

<style>
    .alert {
        padding: 10px;
        border: 1px solid transparent;
        border-radius: 4px;
        margin-bottom: 20px;
        text-align: center
    }

    .alert-success {
        background-color: #d4edda; /* Green background color */
        border-color: #c3e6cb; /* Green border color */
        color: #155724; /* Green text color */
    }
</style>

@endif