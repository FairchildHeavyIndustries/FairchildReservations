create user qa_frs@localhost;

grant all on qafrsdb.* to qa_frs@localhost;

set password for qa_frs@localhost = password("qa_frs");

