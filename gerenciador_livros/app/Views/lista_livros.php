<h1>Lista de Livros</h1>
<table>
    <thead>
    <a href="<?= site_url('/livros/adicionar') ?>" class="botao-adicionar">Adicionar Novo Livro</a>
    <br>
    <a href="<?= site_url('categorias/lista') ?>" class="botao-categorias">Ver Categorias</a>
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Ano de Publicação</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($livros as $livro) : ?>
            <tr>
                <td><?= $livro['titulo']; ?></td>
                <td><?= $livro['autor']; ?></td>
                <td><?= $livro['ano_publicacao']; ?></td>
                <td>
                <a href="<?= site_url('/livros/editar/'.$livro['id']) ?>" class="btn-editar">Editar</a>
                <a href="<?= site_url('livros/deletar/' . $livro['id']) ?>" onclick="return confirm('Deseja realmente deletar o livro?')">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        
    </tbody>
</table>