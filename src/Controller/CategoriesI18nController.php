<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CategoriesI18n Controller
 *
 * @property \App\Model\Table\CategoriesI18nTable $CategoriesI18n
 * @method \App\Model\Entity\CategoriesI18n[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriesI18nController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $categoriesI18n = $this->paginate($this->CategoriesI18n);

        $this->set(compact('categoriesI18n'));
    }

    /**
     * View method
     *
     * @param string|null $id Categories I18n id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriesI18n = $this->CategoriesI18n->get($id, [
            'contain' => [],
        ]);

        $this->set('categoriesI18n', $categoriesI18n);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriesI18n = $this->CategoriesI18n->newEmptyEntity();
        if ($this->request->is('post')) {
            $categoriesI18n = $this->CategoriesI18n->patchEntity($categoriesI18n, $this->request->getData());
            if ($this->CategoriesI18n->save($categoriesI18n)) {
                $this->Flash->success(__('The categories i18n has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categories i18n could not be saved. Please, try again.'));
        }
        $this->set(compact('categoriesI18n'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Categories I18n id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriesI18n = $this->CategoriesI18n->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriesI18n = $this->CategoriesI18n->patchEntity($categoriesI18n, $this->request->getData());
            if ($this->CategoriesI18n->save($categoriesI18n)) {
                $this->Flash->success(__('The categories i18n has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categories i18n could not be saved. Please, try again.'));
        }
        $this->set(compact('categoriesI18n'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Categories I18n id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriesI18n = $this->CategoriesI18n->get($id);
        if ($this->CategoriesI18n->delete($categoriesI18n)) {
            $this->Flash->success(__('The categories i18n has been deleted.'));
        } else {
            $this->Flash->error(__('The categories i18n could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
