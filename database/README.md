# Database Structure

## 🗄️ Overview
The StadiumStream database contains the following main entities:

| Table | Description |
|--------|-------------|
| `user` | Stores user information |
| `role` | Defines user roles (admin/user) |
| `user_role` | Maps users to roles |
| `team` | Contains national team data |
| `stade` | Stadium details |
| `match` | Scheduled matches between teams |
| `ticket` | Ticket purchase and reservation records |

### Relationships
- A **user** can have one or more **roles**.  
- A **match** involves two **teams** and one **stadium**.  
- Each **ticket** belongs to one **user** and one **match**.

Refer to `seeders.sql` for sample initial data.
