# Projeto Coopers – Entrega Final e Revisões

## ⏱️ Tempo estimado x Tempo real

O prazo estipulado para a entrega do projeto foi de **14h30 a 24h**, sendo concluído em aproximadamente **20 horas de desenvolvimento**.

---

## 🔗 Acesso ao Projeto

- **URL do site:** http://maniacal-riddle.localsite.io  
  - Login: `produce`  
  - Senha: `mindless`  

- **Painel WordPress (Admin):**  
  - Credenciais enviadas por e-mail.

Em caso de dúvidas ou problemas:  
📧 [ryanpetris@hotmail.com](mailto:ryanpetris@hotmail.com)  
📱 (41) 99670-2840

---

## 🛠️ Processo de Desenvolvimento

### Abordagem Mobile First  
O layout foi implementado com a abordagem **mobile-first**. Apesar de ainda estar me aprofundando na técnica, utilizei este projeto como prática. O resultado busca manter fidelidade ao design original do Figma, com pequenas variações visuais.

### Integração com WordPress e Tema Underscore  
A base do projeto foi o tema **Underscore (_s)**. Toda a estrutura HTML/CSS foi adaptada ao WordPress, respeitando sua arquitetura padrão de temas.

---

## 🔧 Uso do ACF (Advanced Custom Fields)

O plugin ACF foi fundamental no projeto, mesmo sendo minha primeira experiência com ele. A curva de aprendizado foi acessível, e a criação de campos personalizados e CPTs seguiu uma lógica semelhante à que já utilizo no WordPress.

**Versão gratuita:**  
Atendeu plenamente às necessidades do projeto, mesmo com algumas limitações.

**Observações:**  
Em alguns blocos, percebi que a experiência de uso no painel poderia ser mais fluida. Ainda assim, os objetivos foram cumpridos com sucesso dentro do escopo proposto.

---

## 🔍 Desafios e Soluções

O maior desafio foi implementar uma **query com laço `for`**, a fim de verificar dinamicamente a disponibilidade de determinados recursos na seção “Planos”, com base nos dados do ACF.

---

## 🌍 Internacionalização

O projeto mescla elementos em português e inglês:

- **Código (classes, IDs, variáveis):** Inglês  
- **Campos no painel administrativo:** Predominantemente em português  

**Nota para projetos futuros:** manter a consistência do idioma, especialmente no painel, para garantir uma melhor experiência de uso ao cliente.

---

## ⚠️ Funcionalidades não implementadas

**Posts clicáveis ("Good Things"):**  
Os links estão ativos, mas **não foi desenvolvida uma página individual personalizada** para cada post. Essa funcionalidade foi deixada de fora para garantir a entrega dentro do prazo.

**Formulário:**  
Como o gerenciamento do formulário envolve lógica de backend e validações específicas, tornar seus campos editáveis diretamente pelo usuário não é uma prática recomendada neste contexto. Por esse motivo, a solução adotada foi um formulário estático, priorizando estabilidade e segurança.

---

## 🎨 Estilização e Animações

- **Bootstrap:** usado para grid e classes utilitárias  
- **CSS personalizado:** aplicado nos elementos com design mais específico  
- **Animações:** realizadas com Animate.css e AOS  

Para **ativar ou desativar as animações**, edite o arquivo:  
`functions.php`, linha **180** – basta comentar ou descomentar o bloco correspondente.

---

## ⚙️ Metodologia de Trabalho

1. Instalação do ambiente local com **LocalWP**  
2. Instalação do tema Underscore e plugins essenciais  
3. Estudo e implementação do ACF com base na documentação e apoio de IA  
4. Desenvolvimento do front-end estático  
5. Integração com o WordPress  
6. Criação de campos personalizados (ACF)  
7. Revisão de boas práticas e semântica  
8. Inclusão de animações visuais  
9. Inserção de comentários explicativos no código

---

## ✅ Conclusão

Este projeto foi um excelente desafio e uma ótima oportunidade de colocar a “mão no código” novamente.

Acredito ter entregue um produto funcional e alinhado com as expectativas. Identifico pontos a melhorar, principalmente em **padronização** e **otimização**, e estou motivado a aplicar esses aprendizados em futuros projetos.

**Muito obrigado pela oportunidade!**
