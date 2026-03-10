# Site Grupo Hineni - Versão HTML/PHP Estática

Conversão do site React para HTML/PHP estático, compatível com hospedagem compartilhada.

## 📁 Estrutura do Projeto

```
site_grupohineni_html/
├── index.php                      # Página home
├── quem-somos.php                 # Página institucional
├── hineni-digital.php             # Serviços de marketing digital
├── hineni-cybersecurity.php       # Serviços de segurança cibernética
├── nossos-clientes.php            # Galeria de clientes com filtros
├── contato.php                    # Página de contato com formulário
├── enviar-contato.php             # Script de processamento de formulário
├── clients.php                    # Dados dos clientes (editável)
├── .htaccess                      # Reescrita de URLs
├── includes/
│   ├── header.php                 # Navbar compartilhada
│   └── footer.php                 # Footer compartilhado
└── assets/                        # (futuro) imagens e recursos estáticos
```

## 🚀 Instalação

### Requisitos
- PHP 7.4 ou superior
- Apache com mod_rewrite habilitado (para .htaccess)
- Suporte a envio de email (mail() ou SMTP configurado)

### Passo a Passo

1. **Fazer upload dos arquivos para o servidor**
   ```bash
   scp -r site_grupohineni_html/* seu_usuario@seu_servidor:/public_html/
   ```

2. **Verificar permissões** (se necessário)
   ```bash
   chmod 755 site_grupohineni_html/
   chmod 644 site_grupohineni_html/*.php
   chmod 755 site_grupohineni_html/includes/
   ```

3. **Configurar email** (importante para o formulário de contato)
   - Editar `enviar-contato.php` se necessário ajustar:
     - Email destino: `contato@grupohineni.com.br`
     - Headers SMTP se hospedagem exigir

4. **Testar o site**
   - Acessar `https://seu-dominio.com/`
   - Testar navegação entre todas as páginas
   - Testar formulário de contato

## ✏️ Editando Dados

### Clientes (Seção Nossos Clientes)
Editar arquivo `clients.php` para adicionar/modificar clientes:

```php
$clients = [
    [
        "name" => "Nome da Empresa",
        "category" => "marketing",      // Categoria: marketing, ecommerce, consultoria, financa, saude, industrial, educacao, turismo, varejo, logistica
        "featured" => true,              // true para destacar cliente
        "description" => "Descrição do projeto...",
        "website" => "https://...",      // URL do site (opcional)
        "logo" => "Iniciais"             // Exibição na grade
    ],
    // ... mais clientes
];
```

### Email de Contato
Editar `enviar-contato.php` linha 62 para alterar email destino:
```php
$emailDestino = 'seu-email@grupohineni.com.br';
```

### Textos e Conteúdo
Cada página (.php) contém todo o HTML e texto. Editar diretamente nos arquivos para ajustar conteúdo.

### Menu de Navegação
Editar `includes/header.php` para modificar links e itens do menu.

## 🎨 Personalizações

### Cores
As cores principais são definidas em CSS no `includes/header.php`:
- Roxo/Azul (Cybersecurity): `#667eea`, `#764ba2`
- Rosa/Laranja (Digital): `#f093fb`, `#f5576c`

### Fontes
Utiliza system fonts padrão para performance. Para alterar, editar `includes/header.php`:
```css
body { font-family: sua-fonte, sans-serif; }
```

### CDN Externas
- **Tailwind CSS**: `cdn.tailwindcss.com`
- **Lucide Icons**: `unpkg.com/lucide@latest`

Pode ser necessário ajustar versões se houver incompatibilidades.

## 📧 Configuração de Email

### Se usar PHP mail()
Certifique-se que o servidor tem suporte a envio de email configurado.

### Se usar SMTP (Gmail, Sendgrid, etc)
Instale PHPMailer via Composer ou edite `enviar-contato.php`:

```bash
composer require phpmailer/phpmailer
```

Então substitua as linhas de `mail()` com PHPMailer.

## ✅ Checklist de Verificação

- [ ] Todos os links funcionam
- [ ] Formulário de contato envia email
- [ ] Responsividade em mobile
- [ ] Nenhuma referência a "Automação" (só "Cybersecurity")
- [ ] Imagens carregam corretamente
- [ ] Blog foi removido (não incluído)
- [ ] WhatsApp flutuante aparece em todas as páginas
- [ ] Página carrega rápido

## 🔒 Segurança

- Validação de formulário no servidor (PHP)
- Sanitização de entrada com `htmlspecialchars()`
- Headers de email protegidos contra injeção
- Arquivo `.htaccess` previne acesso direto a arquivos sensíveis

## 📱 Responsividade

O site usa Tailwind CSS com breakpoints:
- Mobile-first design
- Testes em: iPhone, iPad, desktop
- Menu mobile automático em telas pequenas

## 🚀 Performance

- CSS via CDN (cache global)
- Icons via CDN (carregar sob demanda)
- Compressão GZIP habilitada (via .htaccess)
- Cache de navegador configurado

## 📞 Suporte

Para dúvidas ou problemas:
- Email: contato@grupohineni.com.br
- WhatsApp: +55 43 9 9113-2227

---

**Versão**: 1.0
**Última atualização**: Março 2026
**Autor**: Grupo Hineni
