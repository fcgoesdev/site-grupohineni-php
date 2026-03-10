# Guia de Teste Local - Site Grupo Hineni

## 🏃 Teste Rápido Localmente

### Opção 1: Usando Python HTTP Server (Rápido para HTML/CSS/JS)

```bash
cd /home/fabio/Projetos/Geral/site_grupohineni_html
python3 -m http.server 8000
```

Acesso: `http://localhost:8000/`

**Nota**: Formulário de contato não funcionará (precisa PHP)

### Opção 2: Usando PHP Built-in Server (Recomendado)

```bash
cd /home/fabio/Projetos/Geral/site_grupohineni_html
php -S localhost:8000
```

Acesso: `http://localhost:8000/`

**Vantagem**: Formulário funciona com mail() fake

### Opção 3: Usando Docker (Mais Realista)

```bash
# Criar arquivo Dockerfile
cat > Dockerfile << 'EOF'
FROM php:7.4-apache
RUN docker-php-ext-enable mbstring
RUN a2enmod rewrite
COPY . /var/www/html/
EXPOSE 80
EOF

# Executar
docker build -t grupo-hineni .
docker run -p 8000:80 grupo-hineni
```

Acesso: `http://localhost:8000/`

## ✅ Checklist de Teste Local

### 1. Teste de Navegação

- [ ] Carregar `http://localhost:8000/`
- [ ] Clicar em "Quem Somos" → `/quem-somos.php`
- [ ] Clicar em "Hineni Digital" → `/hineni-digital.php`
- [ ] Clicar em "Hineni Cybersecurity" → `/hineni-cybersecurity.php`
- [ ] Clicar em "Nossos Clientes" → `/nossos-clientes.php`
- [ ] Clicar em "Contato" → `/contato.php`
- [ ] Voltar ao topo com clique no logo "Grupo Hineni"

### 2. Teste de Responsividade

No Chrome DevTools (F12):
- [ ] Toggle device toolbar (Ctrl+Shift+M)
- [ ] iPhone SE (375x667)
- [ ] iPad (768x1024)
- [ ] Desktop (1024x768)

Verificar:
- [ ] Menu colapsável em mobile
- [ ] Grids se adaptam corretamente
- [ ] Textos legíveis
- [ ] Botões clicáveis

### 3. Teste de Formulário

Na página `/contato.php`:

1. **Teste 1 - Validação Cliente**
   - [ ] Deixar campos vazios e clicar "Enviar"
   - [ ] Deve mostrar erro de validação HTML5
   - [ ] Sair de um campo sem preencher deve validar

2. **Teste 2 - Email Inválido**
   - [ ] Digitar "email-invalido" no campo email
   - [ ] Deve rejeitar

3. **Teste 3 - Envio Completo**
   - [ ] Preencher todos os campos corretamente
   - [ ] Aceitar privacidade
   - [ ] Clicar "Enviar Mensagem"
   - [ ] Deve redirecionar para contato.php?status=success
   - [ ] Mensagem de sucesso deve aparecer

### 4. Teste de Filtros (Nossos Clientes)

Na página `/nossos-clientes.php`:

- [ ] Botão "Todos" carrega todos os 10 clientes
- [ ] Filtro "Marketing Digital" mostra apenas 1 cliente
- [ ] Filtro "E-Commerce" mostra apenas 1 cliente
- [ ] Clientes destacados (⭐) aparecem primeiro
- [ ] Filtro "Educação" mostra 1 cliente destacado

### 5. Teste de Performance

No console (F12):

```javascript
// Medir tempo de carregamento
console.time('página');
// ... fazer algo ...
console.timeEnd('página');
```

- [ ] Homepage carrega em < 2s
- [ ] Sem erros no console
- [ ] Sem warnings em rede
- [ ] CSSe JS das CDNs carregam

### 6. Teste de Links Externos

- [ ] Link "WhatsApp" abre chat correto
- [ ] Links de email funcionam (abre cliente de email)
- [ ] Links internos não abrem em nova aba

## 🐛 Troubleshooting

### PHP não processa (vê código)

**Problema**: Vê `<?php echo ...` na página
**Solução**: Usar PHP Server, não Python HTTP

```bash
php -S localhost:8000
```

### .htaccess não funciona

**Problema**: URLs com `.php` explícito não funcionam
**Solução**: Em teste local, usar URLs diretas

```
http://localhost:8000/quem-somos.php ✓
```

Em produção com Apache + mod_rewrite:
```
https://seu-dominio.com/quem-somos ✓
```

### Menu mobile não abre

**Problema**: Clique no hamburger não abre menu
**Solução**: Verificar console (F12) para erros de JavaScript

```javascript
// Debug: verificar se elemento existe
document.getElementById('mobileMenu');
```

### CDN não carrega (sem internet)

**Problema**: Tailwind CSS não funciona
**Solução**: Desenvolver offline não é possível com CDN.
Alternativas:
- Usar internet
- Instalar Tailwind localmente
- Usar CSS puro

## 📊 Testes de Compatibilidade

### Navegadores Desktop

```
Windows:
  [ ] Chrome 120+
  [ ] Firefox 120+
  [ ] Edge 120+
  [ ] IE 11 (não suportado, ok)

Mac:
  [ ] Safari 17+
  [ ] Chrome 120+

Linux:
  [ ] Firefox 120+
  [ ] Chrome 120+
```

### Mobile Browsers

```
Android:
  [ ] Chrome Mobile
  [ ] Firefox Mobile
  [ ] Samsung Internet

iOS:
  [ ] Safari (pode não suportar algumas features)
  [ ] Chrome Mobile
```

## 🎯 Teste de Usabilidade

1. **Primeiro acesso**
   - [ ] Homepage clara e atraente?
   - [ ] CTAs visíveis?
   - [ ] Menu intuitivo?

2. **Navegação**
   - [ ] Fácil encontrar cada seção?
   - [ ] Nenhuma página perdida?
   - [ ] Links óbvios?

3. **Formulário**
   - [ ] Fácil de preencher?
   - [ ] Validação clara?
   - [ ] Confirmação visível?

4. **Responsividade**
   - [ ] Se ve bem em mobile?
   - [ ] Nada "quebrado"?
   - [ ] Toque fácil em botões?

## 🚀 Simulação de Produção

Para testar como estará em produção:

### Com Apache + PHP (mais realista)

```bash
# No macOS com Homebrew
brew install apache2 php

# No Ubuntu/Debian
sudo apt-get install apache2 php

# Copiar site para /var/www/html/
sudo cp -r /home/fabio/Projetos/Geral/site_grupohineni_html/* /var/www/html/

# Iniciar Apache
sudo systemctl start apache2

# Acessar
open http://localhost/
```

### Teste de Email com Mailhog

```bash
# Instalar (precisa Go)
# https://github.com/mailhog/MailHog

# Executar
MailHog

# Modificar php.ini para usar localhost:1025
nano /usr/local/etc/php/7.4/php.ini

# Ou em enviar-contato.php, adicionar:
ini_set('sendmail_path', '/usr/local/bin/mhsendmail');
```

Acessar painel: `http://localhost:1025/`

## 📝 Relatório de Teste

Fazer um documento com:

1. Data e hora do teste
2. Ambiente (navegador, SO, conexão)
3. Funcionalidades testadas
4. Bugs encontrados
5. Recomendações

Exemplo:

```
DATA: 2026-03-10
NAVEGADOR: Chrome 120.0
SO: macOS 14.3
CONEXÃO: WiFi 5G

TESTE 1: Homepage carrega - ✓ OK
TESTE 2: Menu funciona - ✓ OK
TESTE 3: Formulário valida - ✓ OK
TESTE 4: Email envia - ✓ OK (com PHP)
TESTE 5: Mobile funciona - ✓ OK

BUGS ENCONTRADOS: Nenhum

RECOMENDAÇÕES:
- Aumentar tamanho de botões em mobile
- Adicionar animações aos cards
```

---

**Próximo Passo**: Se tudo passar, fazer deploy em servidor!
