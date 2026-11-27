import React, { useCallback, useEffect, useMemo, useState } from 'react';
import { createRoot } from 'react-dom/client';
import { useEditor, EditorContent } from '@tiptap/react';
import StarterKit from '@tiptap/starter-kit';
import Link from '@tiptap/extension-link';
import Underline from '@tiptap/extension-underline';
import TextAlign from '@tiptap/extension-text-align';
import DOMPurify from 'dompurify';
import '../css/app.css';

const emptyPost = { title: '', description: '', description_detail: '', category_id: '' };

function Icon({ name }) {
  const paths = {
    plus: <><path d="M12 5v14M5 12h14" /></>,
    edit: <><path d="M12 20h9" /><path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L8 18l-4 1 1-4Z" /></>,
    trash: <><path d="M3 6h18M8 6V4h8v2m3 0-1 14H6L5 6m4 4v6m6-6v6" /></>,
    close: <><path d="m18 6-12 12M6 6l12 12" /></>,
    arrow: <><path d="M5 12h14m-7-7 7 7-7 7" /></>,
    layers: <><path d="m12 3 9 5-9 5-9-5 9-5Z" /><path d="m3 12 9 5 9-5M3 16l9 5 9-5" /></>,
    file: <><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8Z" /><path d="M14 2v6h6M8 13h8m-8 4h8" /></>,
  };
  return <svg aria-hidden="true" viewBox="0 0 24 24" className="icon" fill="none" stroke="currentColor" strokeWidth="1.7" strokeLinecap="round" strokeLinejoin="round">{paths[name]}</svg>;
}

function Modal({ title, subtitle, onClose, children, wide = false }) {
  useEffect(() => {
    const onKey = (event) => event.key === 'Escape' && onClose();
    window.addEventListener('keydown', onKey);
    document.body.style.overflow = 'hidden';
    return () => { window.removeEventListener('keydown', onKey); document.body.style.overflow = ''; };
  }, [onClose]);

  return <div className="modal-backdrop" onMouseDown={(event) => event.target === event.currentTarget && onClose()}>
    <section className={`modal ${wide ? 'modal-wide' : ''}`} role="dialog" aria-modal="true" aria-labelledby="modal-title">
      <header className="modal-header"><div><span className="eyebrow">SPEACH WORKSPACE</span><h2 id="modal-title">{title}</h2>{subtitle && <p>{subtitle}</p>}</div><button className="icon-button" onClick={onClose} aria-label="Close"><Icon name="close" /></button></header>
      {children}
    </section>
  </div>;
}

function RichTextEditor({ label, value, onChange, placeholder, minHeight = 112, helper }) {
  const editor = useEditor({
    extensions: [
      StarterKit.configure({ heading: { levels: [2, 3] } }),
      Underline,
      Link.configure({ openOnClick: false, autolink: true, linkOnPaste: true, HTMLAttributes: { rel: 'noopener noreferrer nofollow', target: '_blank' } }),
      TextAlign.configure({ types: ['heading', 'paragraph'] }),
    ],
    content: value || '',
    editorProps: {
      attributes: {
        class: 'rich-editor-content',
        'aria-label': label,
        'data-placeholder': placeholder,
      },
    },
    onUpdate: ({ editor: currentEditor }) => onChange(currentEditor.getHTML()),
  });

  useEffect(() => {
    if (editor && editor.getHTML() !== (value || '')) {
      editor.commands.setContent(value || '', false);
    }
  }, [editor, value]);

  const command = (action) => (event) => {
    event.preventDefault();
    if (editor) action(editor.chain().focus()).run();
  };
  const toolbarButton = (name, title, active, action) => (
    <button type="button" className={`editor-tool ${active ? 'is-active' : ''}`} title={title} aria-label={title} onMouseDown={command(action)} disabled={!editor}>
      {name}
    </button>
  );

  return <div className="rich-field">
    <div className="rich-field-heading"><label>{label}</label>{helper && <span>{helper}</span>}</div>
    <div className="rich-editor" style={{ '--editor-min-height': `${minHeight}px` }}>
      <div className="editor-toolbar" role="toolbar" aria-label={`${label} formatting`}>
        {toolbarButton('B', 'Bold', editor?.isActive('bold'), chain => chain.toggleBold())}
        {toolbarButton('I', 'Italic', editor?.isActive('italic'), chain => chain.toggleItalic())}
        {toolbarButton('U', 'Underline', editor?.isActive('underline'), chain => chain.toggleUnderline())}
        <span className="editor-tool-separator" />
        {toolbarButton('H2', 'Heading 2', editor?.isActive('heading', { level: 2 }), chain => chain.toggleHeading({ level: 2 }))}
        {toolbarButton('H3', 'Heading 3', editor?.isActive('heading', { level: 3 }), chain => chain.toggleHeading({ level: 3 }))}
        <span className="editor-tool-separator" />
        {toolbarButton('• List', 'Bullet list', editor?.isActive('bulletList'), chain => chain.toggleBulletList())}
        {toolbarButton('1. List', 'Numbered list', editor?.isActive('orderedList'), chain => chain.toggleOrderedList())}
        {toolbarButton('❝', 'Quote', editor?.isActive('blockquote'), chain => chain.toggleBlockquote())}
        <span className="editor-tool-separator" />
        {toolbarButton('↤', 'Align left', editor?.isActive({ textAlign: 'left' }), chain => chain.setTextAlign('left'))}
        {toolbarButton('↔', 'Align center', editor?.isActive({ textAlign: 'center' }), chain => chain.setTextAlign('center'))}
        {toolbarButton('↦', 'Align right', editor?.isActive({ textAlign: 'right' }), chain => chain.setTextAlign('right'))}
        <span className="editor-tool-separator" />
        {toolbarButton('↗', 'Add link', editor?.isActive('link'), chain => {
          const url = window.prompt('Enter the link URL');
          return url ? chain.setLink({ href: url }) : chain;
        })}
        {toolbarButton('↶', 'Undo', false, chain => chain.undo())}
        {toolbarButton('↷', 'Redo', false, chain => chain.redo())}
      </div>
      <EditorContent editor={editor} />
    </div>
  </div>;
}

function App() {
  const [categories, setCategories] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState('');
  const [modal, setModal] = useState(null);
  const [saving, setSaving] = useState(false);
  const [form, setForm] = useState(emptyPost);

  const loadCategories = useCallback(async () => {
    setError('');
    try {
      const response = await fetch('/api/categories', { headers: { Accept: 'application/json' } });
      if (!response.ok) throw new Error('Unable to load categories.');
      setCategories(await response.json());
    } catch (err) {
      setError(err.message || 'Something went wrong while loading your workspace.');
    } finally {
      setLoading(false);
    }
  }, []);

  useEffect(() => { loadCategories(); }, [loadCategories]);

  const postCount = useMemo(() => categories.reduce((total, category) => total + category.posts.length, 0), [categories]);
  const openPost = (post, categoryId) => {
    setForm(post ? { ...post, category_id: String(post.category_id || categoryId) } : { ...emptyPost, category_id: String(categoryId || categories[0]?.id || '') });
    setModal({ type: 'post-form', post });
  };
  const openCategory = (category) => {
    setForm({ name: category?.name || '' });
    setModal({ type: 'category-form', category });
  };

  async function submitForm(event) {
    event.preventDefault();
    setSaving(true);
    setError('');
    const isCategory = modal.type === 'category-form';
    const resource = isCategory ? 'categories' : 'posts';
    const item = isCategory ? modal.category : modal.post;
    const payload = isCategory ? { name: form.name } : { ...form, category_id: Number(form.category_id) };
    try {
      const response = await fetch(item ? `/api/${resource}/${item.id}` : `/api/${resource}`, {
        method: item ? 'PUT' : 'POST',
        headers: { 'Content-Type': 'application/json', Accept: 'application/json' },
        body: JSON.stringify(payload),
      });
      const data = await response.json();
      if (!response.ok) {
        const message = data.errors ? Object.values(data.errors).flat().join(' ') : data.message;
        throw new Error(message || 'Unable to save changes.');
      }
      setModal(null);
      await loadCategories();
    } catch (err) {
      setError(err.message || 'Unable to save changes.');
    } finally {
      setSaving(false);
    }
  }

  async function removeItem(resource, item, label) {
    if (!window.confirm(`Delete this ${label}? This action cannot be undone.`)) return;
    try {
      const response = await fetch(`/api/${resource}/${item.id}`, { method: 'DELETE', headers: { Accept: 'application/json' } });
      if (!response.ok) throw new Error(`Unable to delete this ${label}.`);
      if (modal?.type === 'post-detail') setModal(null);
      await loadCategories();
    } catch (err) {
      setError(err.message);
    }
  }

  return <main className="app-shell">
    <header className="topbar">
      <a className="brand" href="/" aria-label="Speach home"><span className="brand-symbol">s.</span><span>speach</span></a>
      <div className="topbar-right"><span className="workspace-label"><span className="online-dot" /> Personal workspace</span><div className="avatar">R</div></div>
    </header>

    <section className="intro">
      <div><div className="eyebrow intro-eyebrow">YOUR KNOWLEDGE SPACE</div><h1>Ideas, organised.</h1><p className="intro-copy">A calm space to collect thoughts, share updates and keep the important things close.</p></div>
      <button className="primary-button" onClick={() => openPost(null, categories[0]?.id)} disabled={!categories.length}><Icon name="plus" /> New post</button>
    </section>

    <section className="overview-strip" aria-label="Workspace overview">
      <div className="overview-item"><span className="overview-icon"><Icon name="layers" /></span><span><strong>{categories.length}</strong><small>Categories</small></span></div>
      <div className="overview-divider" />
      <div className="overview-item"><span className="overview-icon lilac"><Icon name="file" /></span><span><strong>{postCount}</strong><small>Published posts</small></span></div>
      <div className="overview-spacer" />
      <button className="subtle-button" onClick={() => openCategory(null)}><Icon name="plus" /> Add category</button>
    </section>

    {error && <div className="alert" role="alert"><span>{error}</span><button onClick={() => setError('')} aria-label="Dismiss">×</button></div>}

    {loading ? <div className="loading-state"><span className="spinner" /> Loading your workspace…</div> : categories.length === 0 ? <div className="empty-state"><span className="empty-icon"><Icon name="layers" /></span><h2>Your space starts here</h2><p>Create your first category to start collecting posts.</p><button className="primary-button" onClick={() => openCategory(null)}><Icon name="plus" /> Create category</button></div> :
      <section className="board" aria-label="Categories and posts">
        {categories.map((category, index) => <article className="category-column" key={category.id}>
          <div className="category-heading">
            <div className="category-heading-main"><span className={`category-index index-${index % 3}`}>{String(index + 1).padStart(2, '0')}</span><div><h2>{category.name}</h2><span className="post-count">{category.posts.length} {category.posts.length === 1 ? 'post' : 'posts'}</span></div></div>
            <div className="category-actions"><button className="icon-button small" onClick={() => openCategory(category)} aria-label={`Edit ${category.name}`}><Icon name="edit" /></button><button className="icon-button small danger-hover" onClick={() => removeItem('categories', category, 'category')} aria-label={`Delete ${category.name}`}><Icon name="trash" /></button></div>
          </div>
          <div className="post-list">
            {category.posts.map((post) => <article className="post-card" key={post.id}>
              <button className="post-card-main" onClick={() => setModal({ type: 'post-detail', post })}>
                <span className="post-kicker">POST <span>·</span> {new Date(post.created_at).toLocaleDateString(undefined, { month: 'short', day: 'numeric', year: 'numeric' })}</span>
                <h3>{post.title}</h3><div className="post-card-description" dangerouslySetInnerHTML={{ __html: DOMPurify.sanitize(post.description || '') }} /><span className="read-more">Read post <Icon name="arrow" /></span>
              </button>
              <div className="post-card-actions"><button className="icon-button tiny" onClick={() => openPost(post, category.id)} aria-label={`Edit ${post.title}`}><Icon name="edit" /></button><button className="icon-button tiny danger-hover" onClick={() => removeItem('posts', post, 'post')} aria-label={`Delete ${post.title}`}><Icon name="trash" /></button></div>
            </article>)}
            <button className="add-post-card" onClick={() => openPost(null, category.id)}><span className="add-post-icon"><Icon name="plus" /></span><span>Add a post</span></button>
          </div>
        </article>)}
      </section>
    }
    <footer className="app-footer"><span>Speach <span className="footer-dot">·</span> A little more clarity, every day.</span><span>Laravel <span className="footer-dot">·</span> React <span className="footer-dot">·</span> PostgreSQL</span></footer>

    {modal?.type === 'post-detail' && <Modal title={modal.post.title} subtitle={categories.find((category) => category.id === modal.post.category_id)?.name || 'Post'} onClose={() => setModal(null)} wide>
      <div className="detail-content"><div className="detail-summary rich-output" dangerouslySetInnerHTML={{ __html: DOMPurify.sanitize(modal.post.description || '') }} /><div className="detail-divider" /><div className="detail-body rich-output" dangerouslySetInnerHTML={{ __html: DOMPurify.sanitize(modal.post.description_detail || '') }} /><div className="detail-meta">Published {new Date(modal.post.created_at).toLocaleDateString(undefined, { dateStyle: 'long' })}</div></div>
      <div className="modal-footer"><button className="secondary-button" onClick={() => removeItem('posts', modal.post, 'post')}><Icon name="trash" /> Delete</button><div><button className="secondary-button" onClick={() => setModal(null)}>Close</button><button className="primary-button" onClick={() => openPost(modal.post, modal.post.category_id)}><Icon name="edit" /> Edit post</button></div></div>
    </Modal>}

    {modal?.type === 'post-form' && <Modal title={modal.post ? 'Edit post' : 'Create a post'} subtitle="Share a thought with your workspace." onClose={() => setModal(null)}>
      <form className="modal-form" onSubmit={submitForm}>
        <label>Category<select required value={form.category_id} onChange={(event) => setForm({ ...form, category_id: event.target.value })}>{categories.map((category) => <option key={category.id} value={category.id}>{category.name}</option>)}</select></label>
        <label>Title<input required maxLength="160" placeholder="Give your post a clear title" value={form.title} onChange={(event) => setForm({ ...form, title: event.target.value })} /></label>
        <RichTextEditor label="Description" value={form.description} onChange={(description) => setForm(current => ({ ...current, description }))} placeholder="A short introduction to your post…" minHeight={100} helper="Short introduction shown on the post card" />
        <RichTextEditor label="Detailed description" value={form.description_detail} onChange={(description_detail) => setForm(current => ({ ...current, description_detail }))} placeholder="Write the full content here…" minHeight={220} helper="Format your content just like in a document" />
        <div className="modal-footer"><button type="button" className="secondary-button" onClick={() => setModal(null)}>Cancel</button><button className="primary-button" disabled={saving}>{saving ? 'Saving…' : modal.post ? 'Save changes' : 'Publish post'}</button></div>
      </form>
    </Modal>}

    {modal?.type === 'category-form' && <Modal title={modal.category ? 'Edit category' : 'New category'} subtitle="Give this collection a simple, recognisable name." onClose={() => setModal(null)}>
      <form className="modal-form" onSubmit={submitForm}><label>Category name<input required maxLength="80" autoFocus placeholder="e.g. Inspiration" value={form.name} onChange={(event) => setForm({ name: event.target.value })} /></label><div className="modal-footer"><button type="button" className="secondary-button" onClick={() => setModal(null)}>Cancel</button><button className="primary-button" disabled={saving}>{saving ? 'Saving…' : modal.category ? 'Save changes' : 'Create category'}</button></div></form>
    </Modal>}
  </main>;
}

createRoot(document.getElementById('app')).render(<React.StrictMode><App /></React.StrictMode>);
