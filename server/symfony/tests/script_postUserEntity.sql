use CursosDisenioWebSymFull
CREATE TABLE [user]
(id INT IDENTITY NOT NULL, email NVARCHAR(180) NOT NULL, roles VARCHAR(MAX) NOT NULL, password NVARCHAR(255) NOT NULL, PRIMARY KEY (id));
CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON [user] (email) WHERE email IS NOT NULL;
EXEC sp_addextendedproperty N'MS_Description', N'(DC2Type:json)', N'SCHEMA', 'dbo', N'TABLE', 'user', N'COLUMN', roles;