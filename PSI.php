<?php
while ($contador = 5) {
echo "Um bom dia para você chave da DtS! Seja bem-vindo ao nosso terminal de consulta à Política
de Segurança da Informação (PSI). Abaixo você podera encontrar um texto introdutório sobre o PSI da nossa agência, Dts\n";
echo "Baseado no Decreto de DECRETO Nº 12.572, DE 4 DE AGOSTO DE 2025, a Door to Space (DtS) resolve
criar o terminal de consulta à Política de Segurança da Informação (PSI), esse terminal tem como objetivo:
• Estabelecer regras que devem ser respeitadas na Sala de Informatica (SI);
• Aprovar as políticas, normas e procedimentos gerais relacionados à segurança da
informação;
• Designar, definir ou alterar as atribuições da Área de Segurança da Informação;
• Aprovar as principais iniciativas para a melhoria contínua das medidas de proteção;
• Apoiar a implantação de soluções para eliminação ou minimização dos riscos;
• Deixar claro como deve ser feito o uso seguro dos recursos da SI;
• Conscientizar os profissionais sobre o zelo dos recursos da SI;
• Criação, desenvolvimento e manutenção de mentalidade de segurança da informação.
O terminal terá as seguintes diretrizes:
• Repudiar e empedir atividades não permitidas na SI;
• Estabelecer normas relativas à implementação da Política de Segurança da Informação
(PSI);
• Apoiar atividades permitidas na SI;
• Orientar a condução da Política de Segurança da Informação já existente ou a ser
implementada.\n";
$op = readline ("Você pode navegar livremente por 4 tópicos do terminal de PSI. Para isso existem 4 atalhos
1 - Recomendações Para o Uso Aceitável dos Recursos da SI
2 - Recomendações Para o Uso Seguro dos Recursos da SI:
3 - Recomendações sobre atividades permitidas
4 - Recomendações sobre atividades NÃO permitidas");
switch ($op) {
case 1:
    echo "---------------Recomendações Para o Uso Aceitável dos Recursos da SI---------------
O uso correto e responsável dos recursos de TI devem ser aplicados a todos os
usuários do agência, inclusive aos externos, estudantes, servidores e prestadores de serviço, que utilizam esses recursos e a infra-estrutura disponível.
Somente atividades lícitas, éticas e administrativamente admitidas devem ser
realizadas, pelo usuário, no âmbito da infra-estrutura de TI, ficando os transgressores sujeitos
à Lei Penal, Civil e Administrativa, na medida da conduta, dolosa ou culposa, que praticarem.
Os documentos produzidos por intermédio dos recursos de TI são de propriedade da
Administração Pública Federal (APF). De igual modo, os programas desenvolvidos para a DtS, por servidores do quadro ou prestadores de serviço.
Os recursos de TI deverão ser utilizados sem violação dos direitos de propriedade
intelectual de qualquer pessoa ou empresa, como marcas e patentes, nome comercial,
segredo empresarial, domínio na Internet, desenho industrial ou qualquer outro material, que não tenha autorização expressa do autor ou proprietário dos direitos, relativos à obra artística, científica ou literária.
As informações pertencentes ao órgão devem ser utilizadas apenas para os propósitos
definidos na sua missão agencial.\n";
echo "Para onde deseja ir agora? ";
    break;
case 2:
    echo "---------------Recomendações Para o Uso Seguro dos Recursos da SI-----------------
O envolvimento do usuário é importante no processo da segurança dos recursos da SI,
pois é na adequada utilização destes recursos, como instrumento de trabalho, que se inicia a formação de uma sólida cultura de segurança da informação.
Desta forma, recomenda-se aos usuários a adoção das seguintes práticas:
1. Fazer regularmente cópias de segurança de seus dados;
2. Manter registro das cópias de segurança;
3. Guardar as cópias de segurança em local seguro e distinto daquele onde se
encontra a informação original;
4. Utilizar senhas que contenham, pelo menos, oito caracteres, compostos de letras,
números e símbolos, evitando o uso de nomes, sobrenomes, números de documentos,
placas de carros, números de telefones, datas que possam ser relacionadas com o
usuário ou palavras constantes em dicionários;
5. Alterar periodicamente suas senhas;
6. Utilizar criptografia sempre que enviar ou receber dados com informações
sensíveis;
7. Certificar a procedência do sítio e a utilização de conexões seguras
(criptografadas) ao realizar transações via web;
8. Verificar se o certificado do sítio ao qual se deseja acessar, esta integro e
corresponde realmente aquele sítio, observando ainda, se o mesmo está dentro do
prazo de validade;
9. Certificar que o endereço apresentado no navegador corresponde ao sítio que
realmente se quer acessar, antes de realizar qualquer ação ou transação;
10. Digitar no navegador o endereço desejado e não utilizar links como recurso para
acessar um outro endereço destino;
11. Não abrir arquivos ou executar programas anexados a e-mails, sem antes verificá-los previamente;
12. Não utilizar o formato executável em arquivos compactados, pois estes tipos são
propícios à propagação de vírus.";
    echo "Para onde deseja ir agora?: ";
    break;
case 3:
    echo "---------------Recomendações sobre atividades permitidas---------------
1. Utilizar programas de computador licenciados para uso pelo órgão público, de
acordo com as disposições específicas previstas em contrato. A instalação de programas e
sistemas homologados é atribuição da administração de sistemas e TI;
2. Criar, transmitir, distribuir, disponibilizar e armazenar documentos, desde que
respeite às leis e regulamentações, notadamente àquelas referentes aos crimes informáticos,
ética, decência, pornografia envolvendo crianças, honra e imagem de pessoas ou empresas,
vida privada e intimidade;
3. Fazer cópia de documentos e ou programas de computador a fim de salvaguardá-los, respeitada a legislação que rege a salvaguarda de dados, informações, documentos e
materiais sigilosos no âmbito da Administração Pública Federal, exigindo-se autorização para
aqueles protegidos pelos direitos autorais, inclusive músicas, textos, documentos digitalizados
e qualquer conteúdo encontrado em revistas, livros ou quaisquer outras fontes protegidas por
direitos autorais.";
    echo "Para onde deseja ir agora?: ";
case 4:
    echo "---------------Recomendações sobre atividades NÃO permitidas----------------
1. Utilizar programas de computador licenciados para uso pelo órgão público, de
acordo com as disposições específicas previstas em contrato. A instalação de programas e
sistemas homologados é atribuição da administração de sistemas e TI;
2. Criar, transmitir, distribuir, disponibilizar e armazenar documentos, desde que
respeite às leis e regulamentações, notadamente àquelas referentes aos crimes informáticos,
ética, decência, pornografia envolvendo crianças, honra e imagem de pessoas ou empresas,
vida privada e intimidade;
3. Fazer cópia de documentos e ou programas de computador a fim de salvaguardá-los, respeitada a legislação que rege a salvaguarda de dados, informações, documentos e
materiais sigilosos no âmbito da Administração Pública Federal, exigindo-se autorização para
aqueles protegidos pelos direitos autorais, inclusive músicas, textos, documentos digitalizados
e qualquer conteúdo encontrado em revistas, livros ou quaisquer outras fontes protegidas por
direitos autorais.";
    echo "Para onde deseja ir agora?: ";
    break;
    default:
        echo "----___-----___-----___-!!!!!!VOCÊ DIGITOU UMA OPÇÃO INVAIDA E FOI REDIRECIONADO PARA O MENU INICIAL!!!!!!---___-----___-----___---\n";
        break;
}
}
?>



