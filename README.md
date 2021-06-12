## Sobre

Projeto feito usando a versão 8 do Framework PHP Laravel, juntamente com o Framework Javascript Vue 2 e a biblioteca de css Bootstrap.

## Como executar

Assim que feito o download, copiar o arquivo .env.example e renomear para .env e rodar ```composer install``` e logo em seguida ```yarn && yarn dev``` ou ```npm i && npm run dev```

Após esse procedimento executar ```php artisan serve```, e o sistema estará hospedado no localhost para análise.

## Bugs Reconhecidos

O formulário de contato está com validação usando a biblioteca bootstrap-vue. Quando a tela carrega ja esta trazendo validação como erro, mesmo sem tentar enviar o formulário. Estou tentando descobrir como adiar essa validação.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
