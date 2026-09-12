# 🏥 Clinical Management SaaS (Multi-Tenant)

Sistema de gestão clínica completo, leve e escalável, projetado com foco em alta eficiência, baixo custo operacional e facilidade de migração para infraestruturas em nuvem (Google Cloud / AWS).

---

### 📌 Principais Recursos
* **Arquitetura Multi-Tenant:** Isolamento seguro de dados por cliente (`tenant_id`) em banco de dados relacional.
* **Roteamento por Subdomínio:** Identificação dinâmica da clínica via subdomínios wildcard (`*.seusistema.com.br`).
* **Prontuário e Agendamentos:** Gestão completa de pacientes, rotinas médicas e controle de consultas.
* **Recursos de PWA:** Interface leve, responsiva e instalável diretamente no computador ou dispositivos móveis.
* **Geração de Documentos:** Emissão automatizada de relatórios, atestados e receitas em PDF.

---

### 🛠️ Tecnologias Utilizadas
* **Backend:** PHP 8.x (PHP nativo, PDO para abstração de banco de dados)
* **Banco de Dados:** MySQL
* **Frontend:** HTML5, CSS3, JavaScript (Vanilla JS, Service Workers)
* **Infraestrutura / Cloud Ready:** Compatível com Docker, Cloud Run, Cloud SQL e Cloud Storage

---

### 🚀 Configuração do Ambiente Local

1. **Clonar o repositório:**
   ```bash
   git clone [https://github.com/seu-usuario/nome-do-repositorio.git](https://github.com/seu-usuario/nome-do-repositorio.git)
