
<script>
    function mudaCadastrar() {
        window.location.href = "estabelecimento-formulario.php";
     }

    function voltar() {
        window.location.href = "index.php";
    }
    function mudaEstabelecimento() {
        window.location.href = "estabelecimento-lista.php";
    }


    $().ready(function () {

        $('#validador').validate({
            errorElement: 'span',

            rules: {
                razao: {
                    required: true,
                    minlength: 5
                },
                cnpj: {
                    required: true
                },
                email: {

                    email:true
                },
                telefone: {
                },

                data: {
                    date: true
                },

                categoria:{
                    required: true
                }

            },
            messages:{

                razao: {
                    required: "Por favor digite o nome do estabelecimento",
                    minlength: "Estebelecimente deve conter no mínimo 5 caracteres"
                },
                cnpj: {
                    required: "Por favor digite o CPNJ do estabelecimento"
                },
                email: {
                    email: "Digite um e-mail válido"
                },
                telefone: {

                },

                data: {
                   date:"Digite uma data válida no formato mês / dia / ano"
                },

                categoria:{

                    required: "Uma categoria é necessária"
                },

                telefone : "Esse campo é obrigatório"
            }
       });
    });




    $( "select" ).change(function()
    {
        if ($(this).val() == "supermercado") {

            $("input#celular").prop('required',true);

        }
        else{

            $("input#celular").prop('required',false);
        }

    });


</script>

<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>



</div>

</body>

</html>