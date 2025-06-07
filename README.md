<p align="center"><img src="assets/logo-corno.svg" width="400" alt="Projeto Corno Lendário logo featuring a stylized deer icon with a modern design against a minimalist background"></p>

<p align="center">
<a href="#status"><img src="https://img.shields.io/badge/status-em%20desenvolvimento-brightgreen" alt="Status: Em Desenvolvimento"></a>
<a href="#versao"><img src="https://img.shields.io/badge/versão-1.0.0-blue" alt="Versão 1.0.0"></a>
<a href="#licenca"><img src="https://img.shields.io/badge/licença-MIT-green" alt="Licença MIT"></a>
</p>

## Sobre o Corno Lendário

Corno Lendário é uma API divertida e leve desenvolvida em Laravel para gerenciar um ranking de cornos. O sistema oferece funcionalidades como:

- Cadastro e gerenciamento de cornos com informações detalhadas
- Sistema de pontuação e níveis evolutivos
- Ranking dos maiores cornos
- Estatísticas e métricas do sistema
- API RESTful completa e documentada

## Como Começar

Clone o repositório e instale as dependências:

```bash
git clone https://github.com/seu-usuario/corno-lendario.git
cd corno-lendario
composer install
```

Configure seu arquivo .env e execute as migrações:

```bash
cp .env.example .env
php artisan key:generate
php artisan migrate
```

## Documentação da API

A API oferece os seguintes endpoints principais:

- `POST /api/v1/cornos` - Cadastra um novo corno
- `GET /api/v1/cornos` - Lista todos os cornos
- `GET /api/v1/cornos/{id}` - Detalhes de um corno
- `PUT /api/v1/cornos/{id}/pontuacao` - Atualiza pontuação
- `GET /api/v1/ranking` - Ranking dos maiores cornos
- `GET /api/v1/stats` - Estatísticas do sistema

## Níveis do Sistema

O sistema possui uma progressão de níveis baseada na pontuação:

🌱 Corno Iniciante (0-49 pontos)  
🤔 Corno Suspeito (50-99 pontos)  
📢 Corno Confirmado (100-199 pontos)  
🥉 Corno Experiente (200-399 pontos)  
🥈 Corno Veterano (400-599 pontos)  
🥇 Corno Master (600-799 pontos)  
👑 Corno Supremo (800-999 pontos)  
🦌 Corno Lendário (1000+ pontos)

## Contribuindo

Contribuições são bem-vindas! Por favor, leia nosso guia de contribuição antes de submeter pull requests.

## Licença

Este projeto está licenciado sob a [Licença MIT](LICENSE).
